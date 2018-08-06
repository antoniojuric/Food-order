<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Alert;

class sweetalertController extends Controller
{
    //
	public function alert($AlertType){
		 switch ($AlertType) {
			 case 'successUpdateProfile':
				 Alert::success('Podaci uspjesno promijenjeni!');
				 return redirect()->route('profile');
				 break;
			 case 'successPostCheckout':
				 Alert::success('Pratite status narudzbe', 'Narudzba uspjesno primljena')->persistent("OK");
				 return redirect()->route('home');
				 break;
			 case 'successupdateStatus':
				 Alert::success('Narudzba gotova');
				 return redirect()->route('admin_finish');
				 break;
			 case 'info':
				 Alert::info('this is info alert');
				 return redirect('/');
				 break;
			 case 'warning':
				 Alert::warning('this is warning alert');
				 return redirect('/');
				 break;
			 case 'error':
				 Alert::error('Morate se prijaviti!');
				 return redirect('/');
				 break;
			 case 'message':
				 Alert::message('this is message alert');
				 return redirect('/');
				 break;
 
			 default:
				 return redirect('/');
				 break;
		 }
	}
}
