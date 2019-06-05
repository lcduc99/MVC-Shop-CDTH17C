<ul class="list-group">

    <?php
        $DataMenu = [
            [
                "Thống kê ",
                YUH_URI_ROOT."/statistical"
            ],
            [
                "Quản lý khách hàng",
                YUH_URI_ROOT."/user_management"
            ],
            [
                "Quản lý đơn hàng",
                YUH_URI_ROOT."/order_management"
            ],
            [
                "Quản lý sản phẩm",
                YUH_URI_ROOT."/product_management"
            ],
            [
                "Quản lý bình luận",
                YUH_URI_ROOT."/comment_management"
            ]
        ];
    ?>

    
    <!-- <div class="btn-group-vertical" style="border:1px solid lightgray; border-radius: 5px;"> -->
     
    @foreach $DataMenu as $value
        <!-- <a href="{{$value[1]}}" style = " text-decoration: none;}">
            <button type="button"   style=" background-color:#fff; 
                                            border: none; 
                                            color: black; ">
            {{$value[0] == @Data:page_title ? 'disabled' : ''}}
            {{$value[0]}}
            </button>
        </a> -->
    
        <li class="list-group-item  {{$value[0] == @Data:page_title ? 'disabled' : ''}}">
            {{ $value[0] == @Data:page_title ? "" : '<a href="'.$value[1].'">'}}
                {{$value[0]}}
            {{ $value[0] == @Data:page_title ? "" : '</a>'}}
        </li>
        @endforeach
     
</ul>