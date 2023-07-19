<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriasRequest;
use App\Http\Requests\ProdutosRequest;
use App\Http\Requests\SubcategoriasRequest;
use App\Models\Categoria;
use App\Models\Produto;
use App\Models\Subcategoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LojaController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function produtoIndex()
    {
        $produtos = Produto::all();

        return view('pages.produtos', [
            'produtos' => $produtos
        ]);
    }

    public function criarProduto()
    {
        $categorias = Categoria::all();
        $subcategorias = Subcategoria::all();

        return view('pages.criar_produto', [
            'categorias' => $categorias,
            'subcategorias' => $subcategorias
        ]);
    }

    public function criarProdutoPost(ProdutosRequest $request)
    {
        $cadastroFoto = $request->all();

       if($request->file('imagem')){
           $imagem = $this->uploadFile($request, 'imagens-produtos', 'imagem');

           $cadastroFoto["imagem"] = $imagem;
       }

        $produto = new Produto;
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->marca = $request->marca;
        $produto->categoria = $request->categoria;
        $produto->subcategoria = $request->subcategoria;
        $produto->estoque = $request->estoque;
        $produto->tamanho = $request->tamanho;
        $produto->cor = $request->cor;
        $produto->imagem = $imagem;

        if (Produto::where('nome', $produto->nome)->exists()) {
            return redirect()->back()->with('error', 'Já existe uma produto com esse nome');
        }

        $produto->save();

        return redirect()->route('produtos')->with('message', 'Produto criado com sucesso');
    }

    public function editarProduto($id)
    {
        $produto = Produto::find($id);
        $categorias = Categoria::all();
        $subcategorias = Subcategoria::all();

        return view('pages.editar_produto', [
            'produto' => $produto,
            'categorias' => $categorias,
            'subcategorias' => $subcategorias
        ]);
    }

    public function editarProdutoPost(Request $request)
    {
        $cadastroFoto = $request->all();

       if($request->file('imagem')){

           $imagem = $this->uploadFile($request, 'imagens-produtos', 'imagem');

           $cadastroFoto["imagem"] = $imagem;
       }

        $id = $request->input('id');
        $produto = Produto::find($id);

        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->marca = $request->marca;
        $produto->categoria = $request->categoria;
        $produto->subcategoria = $request->subcategoria;
        $produto->estoque = $request->estoque;
        $produto->tamanho = $request->tamanho;
        $produto->cor = $request->cor;
        if($request->imagem){
            $produto->imagem = $imagem;
        }
        $produto->update();

        return redirect()->route('produtos')->with('message', 'Produto editado com sucesso');
    }

    public function deletarProduto($id)
    {
        $produto = Produto::find($id);

        $produto->delete();

        return redirect()->route('produtos')->with('message', 'Produto Deletado com sucesso');
    }

    public function categoriaIndex()
    {
        $categorias = Categoria::all();

        return view('pages.categorias', [
            'categorias' => $categorias,
        ]);
    }

    public function criarCategoria()
    {
        return view('pages.criar_categoria');
    }

    public function criarCategoriaPost(CategoriasRequest $request)
    {
        $categoria = new Categoria;
        $categoria->nome_categoria = $request->nome_categoria;

        if (Categoria::where('nome_categoria', $categoria->nome_categoria)->exists()) {
            return redirect()->back()->with('error', 'Já existe uma categoria com esse nome');
        }

        $categoria->save();

        return redirect()->route('categorias')->with('message', 'Categoria criada com sucesso');
    }

    public function editarCategoria($id)
    {
        $categoria = Categoria::find($id);
        $categorias = Categoria::all();
        $subcategorias = Subcategoria::all();

        return view('pages.editar_categoria', [
            'categoria' => $categoria,
            'categorias' => $categorias,
            'subcategorias' => $subcategorias
        ]);
    }

    public function editarCategoriaPost(Request $request)
    {
        $id = $request->input('id');
        $categoria = Categoria::find($id);

        $categoria->nome_categoria = $request->nome_categoria;
        $categoria->update();

        return redirect()->route('categorias')->with('message', 'Categoria editada com sucesso');
    }

    public function deletarCategoria($id)
    {
        $categoria = Categoria::find($id);

        $categoria->delete();

        return redirect()->route('categorias')->with('message', 'Categoria Deletada com sucesso');
    }

    public function subcategoriaIndex()
    {
        $subcategorias = Subcategoria::all();

        return view('pages.subcategorias', [
            'subcategorias' => $subcategorias,
        ]);
    }

    public function criarSubcategoria()
    {
        return view('pages.criar_subcategoria');
    }

    public function criarSubcategoriaPost(SubcategoriasRequest $request)
    {
        $subcategoria = new Subcategoria;
        $subcategoria->nome_subcategoria = $request->nome_subcategoria;

        if (Subcategoria::where('nome_subcategoria', $subcategoria->nome_subcategoria)->exists()) {
            return redirect()->back()->with('error', 'Já existe uma Subcategoria com esse nome');
        }

        $subcategoria->save();

        return redirect()->route('subcategorias')->with('message', 'Subcategoria criada com sucesso');
    }

    public function editarSubcategoria($id)
    {
        $subcategoria = Subcategoria::find($id);
        $categorias = Categoria::all();
        $subcategorias = Subcategoria::all();

        return view('pages.editar_subcategoria', [
            'subcategoria' => $subcategoria,
            'categorias' => $categorias,
            'subcategorias' => $subcategorias
        ]);
    }

    public function editarSubcategoriaPost(Request $request)
    {
        $id = $request->input('id');
        $subcategoria = Subcategoria::find($id);

        $subcategoria->nome_subcategoria = $request->nome_subcategoria;
        $subcategoria->update();

        return redirect()->route('subcategorias')->with('message', 'Subcategoria editada com sucesso');
    }

    public function deletarSubcategoria($id)
    {
        $subcategoria = Subcategoria::find($id);

        $subcategoria->delete();

        return redirect()->route('subcategorias')->with('message', 'Subcategoria Deletada com sucesso');
    }

    public function uploadFile($request, $folder, $fileInputName) {
        // Define o valor default para a variável que contém o nome do arquivo
        $nameFile = null;

        // Verifica se informou o arquivo e se é válido
        if ($request->hasFile($fileInputName) && $request->file($fileInputName)->isValid()) {

            // Define um nome aleatório para o arquivo baseado no timestamps atual
            $name = $fileInputName ."-". uniqid(date('HisYmd'));

            // Recupera a extensão do arquivo
            $extension = $request->$fileInputName->extension();

            // Define finalmente o nome
            $nameFile = "{$name}.{$extension}";

            // Faz o upload:
            $upload = $request->$fileInputName->storeAs("public/". $folder, $nameFile);
        }

        // Retorna o nome do arquivo gerado
        return $nameFile;
    }

}
