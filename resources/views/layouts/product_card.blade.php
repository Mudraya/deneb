<!-- one item -->
<div class="one-item">
    <div class="one-item-in">
        <div class="one-item-thumb">
            <a href="{{ route('product', [$product->category->code, $product->code]) }}">
                <img src="{{ $product->image }}" alt="">
            </a>
        </div>
        <div class="one-item-descr">
            <div class="one-item-tit">
                {{ $product->name }}
            </div>
            <div class="one-item-info">
                <div class="one-item-price">
                    <span>{{ $product->price }}</span> грн
                </div>
                <form action="{{ route('basket-add', $product) }}" method="POST">
                    <button type="submit" class="btn btn-primary def-min-bt" role="button">
                        Купить
                    </button>
                    <br/>
                    <a href="{{ route('product', [$product->category->code, $product->code]) }}" class="def-min-bt">
                        Подробнее
                    </a>
                    @csrf
                </form>
            </div>

        </div>
    </div>
</div>
<!-- / one item -->