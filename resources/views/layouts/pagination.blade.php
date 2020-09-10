@if ($paginator->hasPages())
<div class="pagi">
    <ul>

        {{-- Previous Page Link --}}
        @if (!$paginator->onFirstPage())
            <li class="pag prev"><a href="{{ $paginator->previousPageUrl() }}"></a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active" ><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="pag next"><a href="{{ $paginator->nextPageUrl() }}"></a></li>
        @endif

    </ul>

    @if ($paginator->hasMorePages())
        <div class="show-more">
            <a href="{{ $paginator->nextPageUrl() }}">
                Показать еще
                <span>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.5938 0.718649C15.3091 0.600803 15.0661 0.649255 14.8646 0.86455L13.5104 2.20842C12.7674 1.50701 11.9185 0.963642 10.9636 0.57822C10.0087 0.192833 9.02082 0.00012207 7.99999 0.00012207C6.91669 0.00012207 5.88199 0.212024 4.89589 0.635573C3.90971 1.05916 3.059 1.6285 2.34376 2.34378C1.62848 3.05913 1.059 3.90973 0.635413 4.89584C0.211865 5.88201 0 6.91657 0 8.00001C0 9.08313 0.211865 10.1179 0.63545 11.1041C1.05914 12.0903 1.62848 12.941 2.3438 13.6562C3.05904 14.3713 3.90975 14.9408 4.89592 15.3644C5.88203 15.788 6.91673 15.9999 8.00002 15.9999C9.19438 15.9999 10.3301 15.7482 11.4063 15.2447C12.4826 14.7414 13.3993 14.0312 14.1564 13.1145C14.2119 13.0451 14.2379 12.9669 14.2343 12.8801C14.2311 12.7934 14.1979 12.7222 14.1354 12.6666L12.7086 11.2292C12.6319 11.1667 12.5454 11.1355 12.4481 11.1355C12.337 11.1494 12.2572 11.1912 12.2086 11.2606C11.7016 11.9205 11.0801 12.4308 10.344 12.7921C9.60796 13.1531 8.82672 13.3335 8.00031 13.3335C7.27821 13.3335 6.58895 13.1929 5.9327 12.9116C5.27638 12.6305 4.70861 12.2503 4.22953 11.7711C3.75049 11.2919 3.37029 10.7243 3.08899 10.0679C2.80777 9.41167 2.66712 8.72259 2.66712 8.00031C2.66712 7.27809 2.80788 6.58868 3.08899 5.93258C3.37018 5.27641 3.75035 4.70863 4.22953 4.22956C4.70876 3.75037 5.27638 3.37016 5.9327 3.08887C6.5888 2.80768 7.27821 2.667 8.00031 2.667C9.39617 2.667 10.608 3.14272 11.6358 4.09412L10.198 5.5314C9.98266 5.73976 9.93421 5.97939 10.0521 6.25018C10.1703 6.52797 10.3752 6.66683 10.667 6.66683H15.3335C15.5141 6.66683 15.6703 6.6009 15.8023 6.46894C15.9341 6.33701 16 6.18078 16 6.00022V1.33352C16 1.04194 15.8649 0.837077 15.5938 0.718649Z" fill="#00A94F"/>
                </svg>
            </span>
            </a>
        </div>
    @endif

    @if (!$paginator->onFirstPage())
        <div class="show-more">
            <a href="{{ $paginator->previousPageUrl() }}">
                Обратно
                <span>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.5938 0.718649C15.3091 0.600803 15.0661 0.649255 14.8646 0.86455L13.5104 2.20842C12.7674 1.50701 11.9185 0.963642 10.9636 0.57822C10.0087 0.192833 9.02082 0.00012207 7.99999 0.00012207C6.91669 0.00012207 5.88199 0.212024 4.89589 0.635573C3.90971 1.05916 3.059 1.6285 2.34376 2.34378C1.62848 3.05913 1.059 3.90973 0.635413 4.89584C0.211865 5.88201 0 6.91657 0 8.00001C0 9.08313 0.211865 10.1179 0.63545 11.1041C1.05914 12.0903 1.62848 12.941 2.3438 13.6562C3.05904 14.3713 3.90975 14.9408 4.89592 15.3644C5.88203 15.788 6.91673 15.9999 8.00002 15.9999C9.19438 15.9999 10.3301 15.7482 11.4063 15.2447C12.4826 14.7414 13.3993 14.0312 14.1564 13.1145C14.2119 13.0451 14.2379 12.9669 14.2343 12.8801C14.2311 12.7934 14.1979 12.7222 14.1354 12.6666L12.7086 11.2292C12.6319 11.1667 12.5454 11.1355 12.4481 11.1355C12.337 11.1494 12.2572 11.1912 12.2086 11.2606C11.7016 11.9205 11.0801 12.4308 10.344 12.7921C9.60796 13.1531 8.82672 13.3335 8.00031 13.3335C7.27821 13.3335 6.58895 13.1929 5.9327 12.9116C5.27638 12.6305 4.70861 12.2503 4.22953 11.7711C3.75049 11.2919 3.37029 10.7243 3.08899 10.0679C2.80777 9.41167 2.66712 8.72259 2.66712 8.00031C2.66712 7.27809 2.80788 6.58868 3.08899 5.93258C3.37018 5.27641 3.75035 4.70863 4.22953 4.22956C4.70876 3.75037 5.27638 3.37016 5.9327 3.08887C6.5888 2.80768 7.27821 2.667 8.00031 2.667C9.39617 2.667 10.608 3.14272 11.6358 4.09412L10.198 5.5314C9.98266 5.73976 9.93421 5.97939 10.0521 6.25018C10.1703 6.52797 10.3752 6.66683 10.667 6.66683H15.3335C15.5141 6.66683 15.6703 6.6009 15.8023 6.46894C15.9341 6.33701 16 6.18078 16 6.00022V1.33352C16 1.04194 15.8649 0.837077 15.5938 0.718649Z" fill="#00A94F"/>
                </svg>
            </span>
            </a>
        </div>
    @endif



</div>
@endif
