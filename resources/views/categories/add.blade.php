@extends("layouts.app")
@section("title", "add category")
@section("content")

<div class="content-page">
    <div class="container-fluid add-form-list">
       <div class="row">
           <div class="col-sm-12">
               <div class="card">
                   <div class="card-header d-flex justify-content-between">
                       <div class="header-title">
                           <h4 class="card-title">Ajouter une categorie</h4>
                       </div>
                   </div>
                   <div class="card-body">
                       <form action="{{route("category.store")}}" method="POST" data-toggle="validator">
                        @csrf
                           <div class="row">
                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label>Nom de la categorie *</label>
                                       <input type="text" name="name" class="form-control" placeholder="Entrer le nom de la categorie" required>
                                       <div class="help-block with-errors"></div>
                                   </div>
                               </div>
                           </div>
                           <button type="submit" class="btn btn-primary mr-2">ajouter la categorie</button>
                           <button type="reset" class="btn btn-danger">Annuler</button>
                       </form>
                   </div>
               </div>
           </div>
       </div>
       <!-- Page end  -->
   </div>
     </div>
   </div>

@endsection
