@extends('admin.partials.sub_layout')

@section('js')
@endsection

@section('action')
	<div class="row">
		<div class="col-sm-12">
			<form id="frmBlog" action="{{ url('/'.ADMIN.'/'.$controller.'/'.$post->post_id) }}" method="POST">
				{{ csrf_field() }}
                {{ method_field('PATCH') }}
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							<label for="title">{{ trans('lang.title') }} <span class="require-sign">*</span></label>
							<div class="form-line">
								<input type="text" name="title" class="form-control" value="{{ $post->title }}" />
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<label for="author">{{ trans('lang.author') }}</label>
									<div class="form-line">
										<input type="text" name="author" class="form-control" value="{{ $post->author }}" />
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<label for="highlight">{{ trans('lang.highlight') }}</label>
									<div class="form-line">
										<textarea name="highlight" class="form-control" rows="5">{{ $post->highlight }}</textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-12">
								<label class="form-label">{{ trans('lang.picture') }}</label>
                            	@include('admin.partials.select_picture', ['thumbnail' => $post->thumbnail])
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							<label class="form-label">{{ trans('lang.content') }}</label>
							<div class="form-line">
								<textarea id="editor" name="content" class="form-control">{{ $post->content }}</textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
                    <div class="col-sm-12 align-right">
                        <div class="col-sm-12">
                            <div class="col-sm-12">
                                <a href="{{ url(ADMIN.'/'.$controller) }}" class="btn bg-grey">{{ trans('lang.btn_cancel') }}</a>
                                <button type="submit" class="btn btn-success m-l-10 btnSubmit">{{ trans('lang.btn_submit') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
			</form>
		</div>
	</div>
@endsection