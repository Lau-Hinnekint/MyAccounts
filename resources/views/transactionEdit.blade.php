@extends ('page')

@section ('body')

<div class="container">
    <section class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
            <h1 class="my-0 fw-normal fs-4">Modifier une opération</h1>
        </div>
        <div class="card-body">
            <form action="{{ @route ('transactionUpdate', ['id' => $id]) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Nom de l'opération *</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="{{ $oldValue->name }}" required>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date *</label>
                    <input type="date" class="form-control" name="date" id="date" value="{{ $oldValue->date_transaction }}" required>
                </div>
                <div class="mb-3">
                    <label for="amount" class="form-label">Montant *</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="amount" id="amount" placeholder="{{ $oldValue->amount }}"required>
                        <span class="input-group-text">€</span>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Catégorie</label>
                    <select class="form-select" name="category" id="category">
                        <!-- <option placeholder="{{ $oldValue->category->id }}" selected>{{ $oldValue->category->name }}</option> -->
                        @foreach ($categories as $category)
                            @if ($category->name == $oldValue->category->name)
                            <option value="{{ $oldValue->category->id }}" selected>{{ $oldValue->category->name }}</option>
                            @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                        
                    </select>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Modifier</button>
                </div>
            </form>
        </div>
    </section>
</div>

<div class="position-fixed bottom-0 end-0 m-3">
    <a href="add.html" class="btn btn-primary btn-lg rounded-circle">
        <i class="bi bi-plus fs-1"></i>
    </a>
</div>

@endSection