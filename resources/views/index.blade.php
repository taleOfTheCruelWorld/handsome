@extends('theme')
@section('content')
    <div class="container-fluid">
        <form action="" method="post">
            @csrf()
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" aria-label="Username"
                    aria-describedby="basic-addon1">
            </div>
            <div class="mb-3">
                <label class="form-label">Telephone Number</label>
                <input type="tel" name="phone" class="form-control" placeholder="Name" aria-label="Username"
                    aria-describedby="basic-addon1">
            </div>
            <div class="mb-3">
                <label class="form-label">Address</label>
                <input type="text" name="adress" class="form-control" placeholder="Name" aria-label="Username"
                    aria-describedby="basic-addon1">
            </div>
            <div class="mb-3">
                <label class="form-label">City</label>
                <select class="form-select" name="city_id">
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Size</label>
                <input type="text" name="size" class="form-control" placeholder="Name" aria-label="Username"
                    aria-describedby="basic-addon1">
            </div>
            <div class="mb-3">
                <label class="form-label">Type of carpet</label>
                <select class="form-select" name="type_id">
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Color</label>
                <select class="form-select" name="color_id">
                    @foreach ($colors as $color)
                        <option value="{{ $color->id }}">{{ $color->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Dilivery type</label>
                <select class="form-select" name="retake_type_id">
                    @foreach ($retake_types as $retake_type)
                        <option value="{{ $retake_type->id }}">{{ $retake_type->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" style="width: 100%;" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection