<section>
    <div class="block no-padding overlape">
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-featured-sec style3">
                        <img src="{{ asset('images/sn1.jpg') }}" alt="" height="500px" />
                        <div class="job-search-sec style3">
                            <div class="job-search style2">
                                <h3>Find the career you deserve</h3>
                                <span>Your job search starts and ends with us.</span>
                                <div class="search-job2 style2">
                                    <form action="{{ route('search') }}" method="post">
                                        @csrf
                                        <div class="row no-gape">
                                            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                                                <div class="job-field">
                                                    <label>Địa điểm làm việc</label>
                                                    <input type="text" placeholder="Địa chỉ" name="address"/>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                                                <div class="job-field">
                                                    <label>Ngành Nghề</label>
                                                    <select  class="chosen-city" name="category-id">
                                                        @foreach($categories as $category)
                                                            <option value="{{ $category->id }}">{{$category->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                                                <button type="submit">
                                                    <i class="fas fa-search"></i>Tìm Kiếm
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div><!-- Job Search 2 -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
