<div class="col-sm-12">
    <div class="row">
        <div class="col-sm-6 thumbnail-container">
            <div class="thumbnail-wrap">
                @if ($thumbnail != null && $thumbnail != "")
                    <a href="#" class="thumbnail-frame">
                        <img src="{{ url($thumbnail) }}" class="img-responsive thumbnail" />
                        <input type="text" name="thumbnail" class="thumbnail-url hidden-input" value="{{ $thumbnail }}" readonly />
                    </a>
                    <i class="material-icons col-red thumbnail-del">clear</i>
                @else
                    <a href="#" class="thumbnail-frame">
                        <img src="{{ asset('adminbsb/images/default.jpg') }}" id="thumbnail-img" class="img-responsive thumbnail" />
                        <input type="text" name="thumbnail" class="thumbnail-url hidden-input" readonly />
                    </a>
                    <i class="material-icons col-red thumbnail-del hide">clear</i>
                @endif
            </div>
        </div>
    </div>
</div>
