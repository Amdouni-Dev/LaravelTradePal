<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Hazelnut /</span> Ajouter un hazelnut
</h4>
<div class="row">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-4">
            <div class="card-body"><div>
                    <form action="{{ route('hazelnuts.store') }}" method="POST">
                        @csrf
                        <label for="defaultFormControlInput" class="form-label">Amount</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Amount"   name="amount" aria-describedby="defaultFormControlHelp" />
                        <br/>
                        <label for="defaultFormControlInput" class="form-label">Expiration Date</label>
                        <input type="date" class="form-control" id="defaultFormControlInput" placeholder="Expiration Date"   name="expiration-date" aria-describedby="defaultFormControlHelp" />
                        <br/>
                        <button type="submit" class="btn btn-primary">Ajouter</button>

                    </form>
                </div>
            </div>
        </div>


    </div>
</div>
