<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use PDF;

use TCPDF;

class PdfDemoController extends Controller
{
	public function index(){
    	return view('PdfDemo');
    }

    public function samplePDF()
    {
        $html_content = '<h1>Generate a PDF using TCPDF in laravel </h1>
        		<h4>by<br/>Learn Infinity</h4>';
      

        PDF::SetTitle('Sample PDF');
        PDF::AddPage();
        PDF::writeHTML($html_content, true, false, true, false, '');

        PDF::Output('SamplePDF.pdf');
    }


    public function savePDF()
    {    
        $html_content = '<h1>Generate a PDF using TCPDF in laravel </h1>
        		<h4>by<br/>Learn Infinity</h4>';
      

        PDF::SetTitle('Sample PDF');
        PDF::AddPage();
        PDF::writeHTML($html_content, true, false, true, false, '');

        PDF::Output(public_path(uniqid().'_SamplePDF.pdf'), 'F');
    }

    public function downloadPDF()
    {    
        $html_content = '<h1>Generate a PDF using TCPDF in laravel </h1>
        		<h4>by<br/>Learn Infinity</h4>';
      

        PDF::SetTitle('Sample PDF');
        PDF::AddPage();
        PDF::writeHTML($html_content, true, false, true, false, '');

        PDF::Output(uniqid().'_SamplePDF.pdf', 'D');
    }


    public function HtmlToPDF()
    {    
        $view = \View::make('HtmlToPDF');
        $html_content = $view->render();
      

        PDF::SetTitle('Sample PDF');
        PDF::AddPage();
        PDF::writeHTML($html_content, true, false, true, false, '');

        PDF::Output(uniqid().'_SamplePDF.pdf');
    }
    
    public function getPrint()
    {
        //PDF作成
        $pdf = new TCPDF();
        //フォント名,フォントスタイル（空文字でレギュラー）,フォントサイズ
        $pdf->setFont('ipaexg','',10);
        //ページを追加
        $pdf->addPage();
        //viewから起こす
        $pdf->writeHTML(view("hoge.print")->render());
        //第一引数はファイル名、第二引数で挙動を指定（D=ダウンロード）
        $pdf->output('hoge' . '.pdf', 'D');
        //今回は適当にブラウザバック
        return Redirect::back();
    }

}
