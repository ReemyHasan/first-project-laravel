<div class="card">
    <div class="card-header pb-0 border-0">
        <h5 class="">Search</h5>
    </div>
    <div class="card-body">
        <form action={{route("dashboard")}} method="GET">
            @csrf
        <input placeholder="..."
            value='{{request('searchWord','')}}'
             class="form-control w-100" name='searchWord' type="text"
            id="search">
        <button class="btn btn-dark mt-2"> Search</button>
    </form>
    </div>
</div>