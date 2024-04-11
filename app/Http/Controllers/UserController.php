<?php

namespace App\Http\Controllers;

use App\Models\PersonDetailf;
use App\Models\Personaldw;
use App\Models\XwendnOne;
use App\Models\Xwendndw;
use App\Models\XwendnSe;
use App\Models\Xwendnchar;
use App\Models\TwezhinawaYak;
use App\Models\TwezhinawDw;
use App\Models\dllnyaJor;
use App\Models\rezlenan;
use App\Models\blawkrawa;
use App\Models\chalakiyak;
use App\Models\chalakidw;
use App\Models\chalakise;
use App\Models\andam;
use App\Models\Contact;
use App\Models\feedback;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{



      /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }


public function show(){


return view('dastpek.personal_details');
//return view('admin.index');



}







public function store(Request $request){


$person = new PersonDetailf(); // Create a new instance of the PersonDetailf model
$id = auth()->id();
$person->name = $request->name;
$person->address = $request->address;
$person->college = $request->college;
$person->number = $request->number;
$person->department = $request->department;
$person->play_zansti = $request->play_zansti;
$person->play_dawakraw = $request->play_dawakraw;
$person->barwar = $request->barwar;
$person->user_id =$id;

$person->save(); // Save the new record to the database



return view('dastpek.personal_dwam' , compact('person'));


    }




    public function persontwo(){
        return view('dastpek.chalaki_one');


    }

public function storedw(Request $request){

$persondw = new Personaldw();

$id = auth()->id();

$persondw->pspori_gshti = $request->pspori_gshti;
$persondw->pspori_wrd = $request->pspori_wrd;
$persondw->user_id =$id;
$persondw->save();

return view('dastpek.chalaki_one');

}
public function xwendnn(){

    return view('dastpek.xwendn_dw')->with('message', 'sucessfuiuuu');


}


public function xwendn( Request $request){

$xwendn = new XwendnOne();


$id = auth()->id();
$xwendn->user_id =$id;
$xwendn->la = $request->la;
$xwendn->takw = $request->takw;



$xwendn->brwanama = $request->brwanama;


$xwendn->pspor = $request->pspor;
$xwendn->zanko = $request->zanko;
$xwendn->wllat = $request->wllat;


$name = $request->file('brwanama')->getClientOriginalName();
$request->file('brwanama')->storeAs('public/brwanamayzero/' , $name);
$xwendn->brwanama = $name;

$name = $request->file('farmani_zanko')->getClientOriginalName();
$request->file('farmani_zanko')->storeAs('public/farmanizanko/' , $name);
$xwendn->farmani_zanko = $name;





$xwendn->save();

return view('dastpek.xwendn_dw')->with('message', 'sucessfuiuuu');
}


public function xwendndww(Request $request){



    return view('dastpek.xwendn_three');

    }

public function xwendndw(Request $request){

$dw = new Xwendndw();
$id = auth()->id();
$dw->user_id =$id;

$name = $request->file('brwanama')->getClientOriginalName();
$request->file('brwanama')->storeAs('public/brwanamayyak/' , $name);
$dw->brwanama = $name;



$dw->nawnishani_nama = $request->nawnishani_nama;
$dw->save();

return view('dastpek.xwendn_three');

}

public function xwendnsee(){


return view('dastpek.xwendn_four');



    }

public function xwendnse(Request $request){


$se = new XwendnSe();
$id = auth()->id();
$se->user_id =$id;

$se->la = $request->la;
$se->takw = $request->takw;
$se->pisha = $request->pisha;
$se->shweni_kar = $request->shweni_kar;

$se->save();

return view('dastpek.xwendn_four');


}


public function xwendnchar(Request $request){


$char = new Xwendnchar();
$id = auth()->id();
$char->user_id =$id;
$char->play_zansti =$request->play_zansti ;
$char-> barwari_wargrtn=$request->barwari_wargrtn ;
$char->layani_plapedar =$request->layani_plapedar ;


$name = $request->file('farmani_zanko')->getClientOriginalName();
$request->file('farmani_zanko')->storeAs('public/farmanizanko/' , $name);
$char->farmani_zanko = $name;




$char->save();

return view('dastpek.xwendn_five');
}


public function xwendncharr(){


    return view('dastpek.xwendn_five');



}


public function xwendnfive(Request $request){


$five = new TwezhinawaYak();

$id = auth()->id();
$five->user_id =$id;
$five->title_twezhinawa=$request->title_twezhinawa;
$five->shweni_bllawkrdnawa=$request->shweni_bllawkrdnawa;
$five->kati_bllawkrdnawa=$request->kati_bllawkrdnawa;
$five->play_zanstibo=$request->play_zanstibo;
$five->save();










return view('dastpek.twezhinawa_dw');


}

public function xwendnfivee(){


    return view('dastpek.twezhinawa_dw');


}


public function xwendnsix(Request $request){


$six = new TwezhinawDw();
$id = auth()->id();
$six->user_id =$id;
$six->title_twezhinawa = $request->title_twezhinawa;
$six->shwen = $request->shwen;
$six->kati_bllawkrdnawa = $request->kati_bllawkrdnawa;
$six->facter = $request->facter;
$six->index_internet = $request->index_internet;
$six->wargirawa = $request->wargirawa;
$six->save();



return view('dastpek.dllnyay_jori');

}

public function xwendnsixx(){

    return view('dastpek.dllnyay_jori');


}


public function dllnyajor(Request $request){


$seven = new dllnyaJor();
$id = auth()->id();
$seven->user_id =$id;
$seven ->sall = $request->sall;
$seven ->hagbay_mamosta = $request->hagbay_mamosta;
$seven ->zanstxwazi_bardawam = $request->zanstxwazi_bardawam;




//$seven ->daranjami_gshti = $request->daranjami_gshti;



$name = $request->file('daranjami_gshti')->getClientOriginalName();
$request->file('daranjami_gshti')->storeAs('public/daranjamgshti/' , $name);
$seven->daranjami_gshti = $name;




$name = $request->file('feedback_qutabi')->getClientOriginalName();
$request->file('feedback_qutabi')->storeAs('public/feedbackqutabi/' , $name);
$seven->feedback_qutabi = $name;






$seven ->save();



return view('dastpek.rezlenan');


}

public function dllnyajorr(){



    return view('dastpek.rezlenan');
}



public function rezlenan(Request $request)
{

$rez = new rezlenan();
$id = auth()->id();
$rez->user_id =$id;
$rez->layani_supasdar = $request->layani_supasdar;
$rez->zhmara = $request->zhmara;
$rez->barwari_farman = $request->barwari_farman;
$rez->hoysupas_pezanin = $request->hoysupas_pezanin;
$rez->save();


return view('dastpek.blawkrdnawa');

}

public function rezlenann(){

    return view('dastpek.blawkrdnawa');


}

public function blawkrdnawa(Request $request){


$blaw = new blawkrawa();

$id = auth()->id();
$blaw->user_id =$id;
$blaw -> nawnishani_kteb = $request->nawnishani_kteb;
$blaw -> shweni_bllawkrdnawa = $request->shweni_bllawkrdnawa;
$blaw->save();

return view('dastpek.chalaki_yak');

}







public function blawkrdnawaa(){


    return view('dastpek.chalaki_yak');
}

public function chalakiyakk(){

return view('dastpek.chalaki_dw');

}

public function chalakiyak(Request $request){

$yakam= new chalakiyak();

$id = auth()->id();
$yakam->user_id =$id;

$yakam -> lizhnay_post = $request->lizhnay_post;
$yakam -> zhmara = $request->zhmara;
$yakam -> barwar = $request->barwar;
$yakam -> maway_lizhna = $request->maway_lizhna;
$yakam ->save();

return view('dastpek.chalaki_dw');

}





public function chalakidwam(Request $request){

$dwam = new chalakidw();

$id = auth()->id();
$dwam->user_id =$id;



$name = $request->file('brwanama')->getClientOriginalName();
$request->file('brwanama')->storeAs('public/brwanama/' , $name);
$dwam->brwanama = $name;

$dwam->nawi_qutabi = $request->nawi_qutabi;
$dwam->zhmara = $request->zhmara;
$dwam->barwar = $request->barwar;
$dwam->barwari_darchun = $request->barwari_darchun;
$dwam->save();


return view('dastpek.chalaki_se');

}





public function chalakidwamm(){
    return view('dastpek.chalaki_se');


}

public function chalakise(Request $request)
{

$se = new chalakise();
$id = auth()->id();
$se->user_id =$id;
$se->nawi_confrance = $request->nawi_confrance;
$se->shwen = $request->shwen;
$se->kati_bastni = $request->kati_bastni;
$se->zhmara = $request->zhmara;
$se->barwar = $request->barwar;
$se->save();

return view('dastpek.andam');

}


public function chalakisee(){

    return view('dastpek.andam');


}


public function andam(Request $request){


$andam = new andam();
$id = auth()->id();
$andam->user_id =$id;

$andam->sandica = $request->sandica;
$andam->zhmaray_nasnama = $request->zhmaray_nasnama;
$andam->barwari_andam = $request->barwari_andam;
$andam->save();

    return view('dastpek.feedback');
}

public function andamm(){


    return view('dastpek.feedback');


}


public function feedback(Request $request)
{

$com= new feedback();
$id = auth()->id();
$com->user_id =$id;
$com ->comment = $request->comment;
$com->save();


    return view('dashboard');
}





public function contact(){


    return view('contact');
}


public function contactStore(Request $request)
{
    // Validate the form data
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'comment' => 'nullable|string|max:1000',
    ]);

    // Create a new contact record
    $contact = new Contact();
    $contact->name = $request->name;
    $contact->email = $request->email;
    $contact->comment = $request->comment;
    $contact->save();

    // Redirect back with success message
    return redirect()->back()->with('success', 'Feedback submitted successfully!');
}





















}
