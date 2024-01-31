<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\TentangController; 
use App\Http\Controllers\KeunggulanController; 
use App\Http\Controllers\JasaController; 
use App\Http\Controllers\KontakController; 
use App\Http\Controllers\PortofolioController; 
use App\Http\Controllers\RatingController;  
use App\Http\Controllers\ArtikelController; 
use App\Http\Controllers\SimulasiBiayaController; 
use App\Home;

class Home extends Model
{
    protected $table = 'tentang';
    protected $table = 'keunggulan';
    protected $table = 'jasa';
    protected $table = 'kontak';
    protected $table = 'portofolio';
    protected $table = 'rating';
    protected $table = 'artikel';
}
?>