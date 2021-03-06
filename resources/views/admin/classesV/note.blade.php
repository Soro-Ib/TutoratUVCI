@extends('layouts.app')

@section('title', 'Note')
    
@section('main')

<div class="container col-10">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Noter la classe virtuelle</h5>
            <!-- No Labels Form -->
            <form action="#" method="POST" class="row g-3">
                <div class="row">                   
                    <div class="col-md-12">
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="note" id="note1">
                            <label class="form-check-label" for="note1">
                                Tres mal
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="note" id="note2">
                            <label class="form-check-label" for="note2">
                               Mal
                            </label>
                        </div>  
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="note" id="note3">
                            <label class="form-check-label" for="note3">
                                Moyen
                            </label>
                        </div> 
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="note" id="note4">
                            <label class="form-check-label" for="note4">
                                Bon
                            </label>
                        </div> 
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="note" id="note5">
                            <label class="form-check-label" for="note5">
                                Tres bon
                            </label>
                        </div>             
                    </div>             
                </div>
                <div class="col-md-12">
                    <label class="form-label">Votre avis</label>
                    <textarea name="" id="" cols="10" rows="5" class="form-control"></textarea>
                </div>   
               
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                    <button type="reset" class="btn btn-secondary">Effacer</button>
                </div>
            </form><!-- End No Labels Form -->
        </div>
    </div>
</div>

@endsection