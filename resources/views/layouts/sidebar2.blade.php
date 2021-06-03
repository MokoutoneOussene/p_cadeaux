<div class="col-md-3 shadow-sm bg-dark" style="border-right: 2px solid black; display: block;">
    <button type="button" class="list-group-item list-group-item-action active bg-dark mt-3">
        <h3 class="text-center">Categories</h3>
    </button>
    <form action="#" method="POST" class="d-flex ml-md-0 banner-form flex-column justify-content-between">
        @csrf
        <label class="text-dark">Secteur d'activité</label>
        <input type="text" class="form-control w-100">
        <label class="text-dark">Domaine</label>
        <input type="text" class="form-control w-100">
        <button type="submit" class="bg-light mt-4 p-2">Rechercher</button>
    </form>
</div>
