<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
use App\Models\User;
use PDF;

class PDFController extends Controller
{
    public function PDF()
    {
        $pdf = PDF::loadView('prueba');
        return $pdf->stream('prueba.pdf');
    }

    public function PDFClientes()
    {
        $customers = Customer::all();
        $pdf = PDF::loadView('admin.pdf.clientes',compact('customers'));
        return $pdf->setPaper('a4','landscape')->stream('Reporte_Clientes.pdf');
    }

    public function PDFUsuarios()
    {
        $users = User::all();
        $pdf = PDF::loadView('admin.pdf.usuarios',compact('users'));
        return $pdf->stream('PDF_Usuarios.pdf');
    }

    public function PDFCategorias()
    {
        $categories = Category::all();
        $pdf = PDF::loadView('admin.pdf.categorias',compact('categories'));
        return $pdf->stream('Reporte_Categorias.pdf');
    }

    public function PDFProductos()
    {
        $products = Product::all();
        $pdf = PDF::loadView('admin.pdf.productos',compact('products'));
        return $pdf->setPaper('a4','landscape')->stream('Reporte_Productos.pdf');
    }
}
