<!-- one item -->
<div class="one-item">
    <div class="one-item-in">
        <div class="one-item-thumb">
            <div class="labels">
                @if($product->isNew())
                    <span class="badge badge-success">@lang('main.properties.new')</span>
                @endif

                @if($product->isHit())
                    <span class="badge badge-danger">@lang('main.properties.hit')</span>
                @endif
            </div>
            <a href="{{ route('product', [$product->category->code, $product->code]) }}">
                <img src="{{ Storage::url($product->image) }}" alt="">
            </a>
        </div>
        <div class="one-item-descr">
            <div class="one-item-tit">
                {{ $product->name }}
            </div>
            <div class="one-item-info">
                <div class="one-item-price">
                    <span>{{ $product->price }}</span> @lang('main.uah')
                </div>
                <form action="{{ route('basket-add', $product) }}" method="POST">
                    @if($product->isAvailable())
                    <button type="submit" class="btn btn-primary def-min-bt" role="button">
                        @lang('main.buy')
                    </button>
                    @else
                        @lang('main.not_available')
                    @endif
                    <br/>
                    <a href="{{ route('product', [isset($current_category) ? $current_category->code : $product->category->code, $product->code]) }}" class="def-min-bt">
                        @lang('main.more')
                    </a>
                    @csrf
                </form>
            </div>

        </div>
    </div>
</div>
<!-- / one item -->
