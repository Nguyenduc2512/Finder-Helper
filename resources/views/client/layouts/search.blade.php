<div class="container">
    <div class="job-search">
        <div class="tab-content bg-white p-4 rounded" id="pills-tabContent">
            <form action="{{ route('search') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-3 col-lg-4 mb-8 mb-lg-0">
                        <input type="text" class="form-control" name="address" placeholder="Where are you ?">
                    </div>
                    <div class="col-md-3 col-lg-4 mb-8 mb-lg-0">
                        <select name="category_id" class="form-control" id="">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3 col-lg-3 mb-3 mb-lg-0">
                        <input type="submit" class="btn btn-primary btn-block" value="Search">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
