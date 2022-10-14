@extends('customer.layouts.app')

@section('title', 'Sản phẩm')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('customer/css/style-nhom-roto.css') }}">
@endsection

@section('content')
    <div class="title">
        <h1>Cửa nhôm Rotoi</h1>
        <div class="link" style="z-index: 2;">
            <a href="{{ route('customer.product.index') }}">Sản phẩm</a> &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;
            <a href="#"><strong>Cửa nhôm Rotoi</strong></a>
        </div>
    </div>
    <div class="main-content">
        <div class="container">
            <div class="row">
                <h3>Hệ nhôm <img src="{{ asset('customer/images/logo-Rotoi.png') }}" alt=""> có cầu</h3>
                <h4 style="color: #797979;">Thermal break version </h4>
                <p>Hệ nhôm có cầu cách nhiệt của Roto được Glasshouse lựa chọn sử dụng là sự kết hợp giữa thanh nhôm thiết kế theo khí hậu châu Á và công nghệ cầu cách nhiệt Technoform Bautec hiện đại nhất trên thế giới. Sử dụng hệ phụ kiện đồng bộ Roto
                    và thanh nhôm Rotoi được thiết kế chuyên biệt cho khí hậu Châu Á – Thái Bình Dương, cửa nhôm Roto-i là thành tựu của sự kết hợp giữa ngành cơ khí Đức đỉnh cao và sự am hiểu về nhu cầu của khách hàng tại từng khu vực. Hệ nhôm Roto-i
                    được thiết kế đồng bộ với hệ thống phụ kiện của Roto. Với vai trò hạn chế sự truyền nhiệt của nhôm, thanh nhôm có cầu cách nhiệt có ưu điểm:</p>
                <ul>
                    <li>Hạn chế sự ảnh hưởng của khí hậu ngoài trời tới không gian sống</li>
                    <li>Tiết kiệm năng lượng làm mát mùa hè và sưởi ấm mùa đông</li>
                </ul>
                <img src="{{ asset('customer/images/img-product/CuanhomRoto/nhomcocau.png') }}" alt="Nhôm Roto-i có cầu" class="img-cuanhom">
                <span class="img-title"><i>Hệ nhôm Roto-i có cầu</i></span>
                <h2>Các hệ cửa đặc biệt</h2>
                <h3 class="door-title">Cửa trượt inowa</h3>
                <h4 class="door-subtitle">Roto Patio Inowa Patio 130</h4>
                <span>Kín khít vượt trội</span>
                <div class="col-md-6">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <p>Được phát minh bởi Roto, Inowa được coi là sự đột phá trong công nghệ cửa trượt, xua tan mọi lo lắng khi ứng dụng tại những công trình trên cao. Đặt ra những tiêu chuẩn cao hơn về độ kín khít của cánh cửa, hệ cửa INOWA
                                    đặc biệt lý tưởng để lắp đặt tại các toà nhà cao tầng thường xuyên bị thử thách bởi gió bão, mưa giông</p>
                                <img src="{{ asset('customer/images/img-product/CuanhomRoto/inowa.jpg') }}" alt="Cửa trượt Patio Inowa">

                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('customer/images/img-product/CuanhomRoto/phukieninowa.png') }}" alt="Phụ kiện cửa trượt Patio Inowa">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h5>Phụ kiện:</h5>
                    <ul>
                        <li>Gioăng cao su ép kín bao quanh cánh, đảm bảo sự kín khít; trong khi dễ dàng vận hành bằng 1 tay</li>
                        <li>Ray trượt PA được làm từ inox không gỉ, tăng độ bền phụ kiện và hỗ trợ cánh cửa vận hành nhẹ nhàng</li>
                        <li>Trọng lượng cánh tối đa 200kg, Chiều cao cánh lên tới 3000mm, Độ rộng 1500mm</li>
                    </ul>
                    <h5>Ứng dụng:</h5>
                    <ul>
                        <li>Phù hợp với những công trình cao tầng tại khu vực khí hậu nhiệt đới gió mùa</li>
                        <li>Các công trình ven biển cần độ kín khít cao để hạn chế ảnh hưởng của muối biển</li>
                        <li>Penthouse, duplex tại trung tâm thành phố nơi chịu ảnh hưởng của tiếng ồn nhờ khả năng cách âm vượt trội</li>
                        <li>Tiết kiệm năng lượng</li>
                    </ul>
                </div>
                <h3 class="door-title">Cửa nhấc trượt Patio Lift</h3>
                <h4 class="door-subtitle">Roto Patio Lift&Slide Patio 130</h4>
                <span>Vận hành êm nhẹ những cánh cửa khổng lồ</span>
                <div class="col-md-6">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <p>Xu hướng thiết kế nhà với những cánh cửa cao, đi kèm theo đó là hệ thống kính nhiều lớp tải trọng lớn đòi hỏi một hệ phụ kiện đặc biệt có sức chịu tải tốt và thanh nhôm profile có kết cấu vững chắc. Cửa nhấc- trượt patio
                                    Lift & Slide là giải pháp hoàn hảo cho bài toán về vận hành êm nhẹ những cánh cửa khổng lồ.</p>
                                <img src="{{ asset('customer/images/img-product/CuanhomRoto/patiolift.jpg') }}" alt="Cửa nhấc trượt Patio Lift">
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('customer/images/img-product/CuanhomRoto/patiolift-2.png') }}" alt="Cửa nhấc trượt Patio Lift">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h5>Phụ kiện:</h5>
                    <ul>
                        <li>Công nghệ khoá cánh tại vị trí bất kỳ trên ray trượt bằng tải trọng của cánh cửa.</li>
                        <li>Kích thước tay cầm cửa trượt được tính toán với mục đích trợ lực, nâng cao tiện nghi khi sử dụng</li>
                        <li>Hệ thống điều hướng của cửa Patio Lift bao gồm thép không gỉ và khuôn chất liệu mạ kẽm được lắp đặt với kỹ thuật chính xác, độ bền đạt tiêu chuẩn Đức, bánh trượt được sản xuất từ nhựa PVC có sức chịu lực cao, giúp cánh cửa vận
                            hành êm ái và dễ dàng.</li>
                    </ul>
                    <h5>Ứng dụng:</h5>
                    <ul>
                        <li>Phù hợp với thiết kế cửa có kích cỡ đặc biệt lớn, chiều cao lên tới 3700mm, cân nặng 400kg</li>
                        <li>Nhà khách, văn phòng, biệt thự có thiết kế thông tầng, không gian rộng</li>
                    </ul>
                </div>
                <h3 class="door-title">Cửa Lật trượt Patio Alversa</h3>
                <h4 class="door-subtitle">Roto Patio Alversa Tilt&Slide FN52D</h4>
                <span>Lưu thông không khí, tiết kiệm không gian</span>
                <div class="col-md-6">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <p>Roto Patio Alversa là hệ cửa đa chức năng kết hợp chế độ lật - trượt đầu tiên trên thế giới, hướng tới mang đến cho người sử dụng sự tiện nghi trong các hoạt động thường ngày. Bên cạnh trượt song song, cửa có thể chuyển
                                    sang chế độ mở lật để thoáng khí cho căn phòng, trong khi vẫn đảm bảo an ninh với công nghệ Secustik</p>
                                <img src="{{ asset('customer/images/img-product/CuanhomRoto/phukien-lattruot.png') }}" alt="Phụ kiện cửa lật trượt Patio Alversa">
                            </div>
                            <div class="col-md-6"><img src="{{ asset('customer/images/img-product/CuanhomRoto/lattruot.png') }}" alt="Cửa lật trượt Patio Alversa"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h5>Phụ kiện:</h5>
                    <ul>
                        <li>Hệ thống khoá trung tâm, tay nắm và hệ phụ kiện trượt được đồng bộ hoá kết hợp với nhau trong hệ thống Patio Alversa, giúp sản phẩm được đánh giá là tập hợp “gen trội” của những hệ phụ kiện ưu việt hiện nay.</li>
                        <li>Thiết kế tối giản tạo ra ưu thế trong sản xuất và vận chuyển.</li>
                    </ul>
                    <h5>Ứng dụng:</h5>
                    <ul>
                        <li>Phù hợp với những không gian yêu cầu cửa đa chức năng, có tính ứng dụng cao.</li>
                        <li>Tiết kiệm diện tích sử dụng thiết kế nhà riêng đòi hỏi những cánh cửa đa chức năng có tính ứng dụng cao.</li>
                    </ul>
                </div>
                <h3 class="door-title">Cửa gấp trượt</h3>
                <h4 class="door-subtitle">Roto Patio Fold&Slide: FN52D</h4>
                <span>Mở rộng tầm nhìn, Kết nối không gian</span>
                <div class="col-md-6">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <p>Là bước cải tiến đầy sáng tạo trong kết nối không gian thiết kế trong nhà và tận dụng tối đa cảnh quan thiên nhiên từ bên ngoài. Với hệ thống cánh gấp linh hoạt về hai phía, hệ cửa gấp trượt đem đến trải nghiệm tối ưu về
                                    “nghỉ dưỡng tại nhà”
                                </p>
                                <img src="{{ asset('customer/images/img-product/CuanhomRoto/gaptruot.jpg') }}" alt="Cửa gấp trượt Patio Fold">
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('customer/images/img-product/CuanhomRoto/phu-kien-gaptruot.png') }}" alt="Phụ kiện cửa gấp trượt Patio Fold">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h5>Phụ kiện:</h5>
                    <ul>
                        <li>Hệ thống con lăn dẫn hướng trên và con lăn chịu lực dưới làm bằng thép không gỉ, kết hợp với ray trượt cạnh khung giúp cánh cửa di chuyển nhẹ nhàng, ổn định</li>
                        <li>Số lượng 8 cánh tối đa (bao gồm cánh chính và cánh gấp) với chiều cao lên tới 2800mm, chiều rộng lên tới 900mm, tải trọng tối đa mỗi cánh 100 kg.</li>
                    </ul>
                    <h5>Ứng dụng:</h5>
                    <ul>
                        <li>Phù hợp cho các biệt thự sân vườn, khách sạn và khu nghỉ dưỡng, các công trình có cảnh quan bên ngoài độc đáo.</li>
                        <li>Kết nối không gian trong nhà và cảnh quan bên ngoài</li>
                    </ul>
                </div>
                <h2>Các hệ cửa cơ bản</h2>
                <div class="col-md-6">
                    <h3 class="door-title">Cửa đi mở quay trong/ngoài</h3>
                    <h4 class="door-subtitle">Inward/Outward opening door FN52D</h4>
                    <img src="{{ asset('customer/images/img-product/CuanhomRoto/cuadimoquay.png') }}" alt="Cửa đi mở quay">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <p>Hệ cửa đi mở quay là lựa chọn phổ biến cho khu vực dân cư và các toà nhà thương mại. Đây là hệ cửa cơ bản sử dụng hệ thống khoá đa điểm MVD H600, khoá vân tay RotoSafe E, hoặc kính điện, kính rèm</p>
                                <img src="{{ asset('customer/images/img-product/CuanhomRoto/cuadimoquay-chieumo.png') }}" alt="Cửa đi mở quay">
                            </div>
                            <div class="col-md-6">
                                <h5>Phụ kiện:</h5>
                                <ul>
                                    <li>Ke góc kép trên cánh và khung làm tăng tính ổn định của toàn bộ cánh cửa</li>
                                    <li>Trọng lượng cánh tối đa 160kg</li>
                                    <li>Chiều cao cánh lên tới 3700mm</li>
                                    <li>Khả năng tích hợp lõi khoá master key hoặc key alike</li>
                                </ul>
                                <h5>Ứng dụng:</h5>
                                <ul>
                                    <li>Kết hợp linh hoạt các hệ thống điện tử, đa dạng mục đích sử dụng</li>
                                    <li>Tiết kiệm chi phí</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="door-title">Cửa trượt song song</h3>
                    <h4 class="door-subtitle">Sliding door PN100</h4>
                    <img src="{{ asset('customer/images/img-product/CuanhomRoto/cuatruotsongsong.png') }}" alt="Cửa trượt song song">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <p>Hệ PN100 với khung và cánh nhỏ phù hợp với cửa có kích thước không quá lớn, vận hành êm ái, dễ dàng sử dụng. Khung ray trượt nghiêng tăng khả năng thoát nước mưa, phù hợp với cửa tiếp giáp mặt ngoài. Khung ray bằng phù
                                    hợp với cửa thông phòng.</p>
                                <img src="{{ asset('customer/images/img-product/CuanhomRoto/cuatruotsongsong-chieumo.png') }}" alt="Cửa trượt song song">
                            </div>
                            <div class="col-md-6">
                                <h5>Phụ kiện:</h5>
                                <ul>
                                    <li>Đa dạng thiết kế với khung 2 ray hoặc 3 ra</li>
                                    <li>Khả năng tích hợp hệ thống cửa lưới chống muỗi</li>
                                    <li>Trọng lượng cánh tối đa 150kg</li>
                                </ul>
                                <h5>Ứng dụng:</h5>
                                <ul>
                                    <li>Thiết kế cơ bản phù hợp với nhiều phong cách nội thất</li>
                                    <li>Linh hoạt trong thiết kế về số lượng cánh và ray trượt</li>
                                    <li>Tiết kiệm chi phí</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="door-title">Cửa sổ mở quay trong</h3>
                    <h4 class="door-subtitle">Inward opening window FN52W</h4>
                    <img src="{{ asset('customer/images/img-product/CuanhomRoto/cuasomoquaytrong.png') }}" alt="Cửa sổ mở quay trong">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <p>Cửa sổ tích hợp phụ kiện quay - lật, được phát minh bởi nhà sáng lập Roto-frank. Đây là dòng sản phẩm làm nên thương hiệu của Roto trên toàn thế giới</p>
                                <img src="{{ asset('customer/images/img-product/CuanhomRoto/cuasomoquaytrong-chieumo.png') }}" alt="Cửa sổ mở quay trong">
                            </div>
                            <div class="col-md-6">
                                <h5>Phụ kiện:</h5>
                                <ul>
                                    <li>Lưu thông không khí trong trạng thái khoá</li>
                                    <li>Cơ chế khoá an toàn 2 lớp</li>
                                </ul>
                                <h5>Ứng dụng:</h5>
                                <ul>
                                    <li>Phù hợp với tiêu chuẩn an toàn cho các căn hộ cao tầng, phòng trẻ em.</li>
                                    <li>Lưu thông không khí thường xuyên mà vẫn đảm bảo an ninh, an toàn</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="door-title">Cửa sổ mở quay ngoài</h3>
                    <h4 class="door-subtitle">Outward opening window CN52</h4>
                    <img src="{{ asset('customer/images/img-product/CuanhomRoto/cuasomoquayngoai.png') }}" alt="Cửa sổ mở quay ngoài">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <p>Thế hệ cửa sổ mở quay ngoài có thiết kế thân thuộc, gần gũi với kiến trúc và phong cách sinh hoạt của người Việt. Ngôn ngữ thiết kế slim-frame dễ dàng phối hợp với nhiều phong cách nội thất khác nhau.</p>
                                <img src="{{ asset('customer/images/img-product/CuanhomRoto/cuasomoquayngoai-chieumo.png') }}" alt="Cửa sổ mở quay ngoài">
                            </div>
                            <div class="col-md-6">
                                <h5>Phụ kiện:</h5>
                                <ul>
                                    <li>Tải trọng cánh lên tới 45kg đối với cửa mở quay, 180kg đối với cửa mở hất</li>
                                    <li>Bản lề ma sát với bằng thép không gỉ, an toàn trong sử dụng, dễ dàng vệ sinh.</li>
                                </ul>
                                <h5>Ứng dụng:</h5>
                                <ul>
                                    <li>Phù hợp với phong cách sử dụng truyền thống</li>
                                    <li>Tối đa diện tích mở để thoáng khí</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="door-title">Cửa sổ mở quay American</h3>
                    <h4 class="door-subtitle">Roto X-Drive OP60</h4>
                    <img src="{{ asset('customer/images/img-product/CuanhomRoto/cuasomoquayAmerican.png') }}" alt="Cửa sổ mở quay American">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <p>Hệ cửa sổ sử dụng tay nắm X-drive đã trở nên thân thuộc trong đời sống sinh hoạt của người Mỹ. Khi đến với thị trường Châu Á, hệ cửa có ưu thế trong lắp đặt tích hợp hệ thống lưới chống côn trùng, chống bụi siêu vi; đáp
                                    ứng nhu cầu của người sử dụng trong thiết kế nhà có nhiều cây cối ở vùng khí hậu nhiệt đới</p>
                                <img src="{{ asset('customer/images/img-product/CuanhomRoto/cuasomoquayAmerican-chieumo.png') }}" alt="Cửa sổ mở quay American">
                            </div>
                            <div class="col-md-6">
                                <h5>Phụ kiện:</h5>
                                <ul>
                                    <li>Bao gồm hệ thống khoá, bản lề và tay quay chuyển động</li>
                                    <li>Hệ thống khoá bằng thép không gỉ với khả năng tích hoạt 6 điểm khoá</li>
                                </ul>
                                <h5>Ứng dụng:</h5>
                                <ul>
                                    <li>Phù hợp với thiết kế nhà vườn, biệt thự sân vườn, các khu resort và khách sạn vùng núi</li>
                                    <li>Hỗ trợ lắp đặt tích hợp lưới chống côn trùng, chống bụi siêu vi trittec</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="door-title">Tường vách</h3>
                    <h4 class="door-subtitle">Window Wall WW150</h4>
                    <p>Hệ tường vách WW150 là hệ nhôm có cầu cách nhiệt, giúp tiết kiệm điện năng, là giải pháp thông tầng kích thước lớn cho các công trình biệt thự, penthouse, duplex. Hệ WW150 được thiết kế tích hợp khung cánh cửa sổ mở quay, mở hất, hoặc
                        kết hợp với các hệ cửa khác của Roto</p>
                    <img src="{{ asset('customer/images/img-product/CuanhomRoto/vachkinh.png') }}" alt="Vách kính">
                </div>
                <h3 class="door-title">CÔNG NGHỆ XỬ LÝ BỀ MẶT</h3>
                <h4 class="door-subtitle">Surface treatment</h4>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ asset('customer/images/img-product/CuanhomRoto/xulybemat.png') }}" alt="Xử lý bề mặt">
                        </div>
                        <div class="col-md-8">
                            <h5>Công nghệ xử lý bề mặt nhôm:</h5>
                            <ul>
                                <li>Công nghệ xử lý bề mặt sơn tĩnh điện powder coating - PWD: Lựa chọn màu sắc phong phú với bề mặt hoàn thiện đa dạng bao gồm sơn bóng, sơn sần, sơn kết cấu, sơn kim loại,…, bảo hành màu sắc lên tới 25 năm. Chất liệu sơn
                                    thân thiện với môi trường, không chứa chì và chất tẩy, không phát tán hợp chất VOCs vào trong không khí, an toàn cho người sử dụng.</li>
                                <li>Công nghệ xi mạ anodisation tạo nên lớp phủ bề mặt láng mịn chống tia UV và chống ăn mòn không khí, trong khi vẫn giữ nguyên màu sắc bề mặt tự nhiên của nhôm. Lựa chọn màu sắc hiện đại như màu đồng, màu bạc, màu vàng gold,
                                    champaign, vân gỗ, …</li>
                            </ul>
                            <h5>Hệ thống phụ kiện của Roto được xử lý bề mặt đa dạng theo nhiều phương pháp khác nhau, tuỳ thuộc vào từng vật liệu làm phụ kiện, vị trí phụ kiện trên cánh cửa, và chức năng của phụ kiện. Một vài ví dụ về công nghệ xử lý bề
                                mặt của chúng tôi:
                            </h5>
                            <ul>
                                <li>NanoSil6: Ứng dụng cho dòng phụ kiện Roto NX, cho khả năng chống trầy xước bề mặt vượt trội so với các dòng phụ kiện cửa trên thị trường. NanoSil có nền tảng là công nghệ Nano (nanotechnology) tiên tiến nhất hiện nay, không
                                    chỉ đáp ứng tiêu chuẩn cao nhất về chống ăn mòn DIN EN 1670 (Class5) mà còn vượt trội hơn mức tiêu chuẩn DIN EN 13126 – 8. Nghiên cứu chỉ ra rằng, những sản phẩm sử dụng công nghệ xử lý bề mặt Nanosil 6 của Roto có
                                    ưu điểm vượt trội tại những công trình công cộng có tần suất sử dụng cao, giúp tiết kiệm chi phí bảo dưỡng định kỳ</li>
                                <li>AVT coating: Ứng dụng cho dòng tay nắm Roto Line, tạo nên lớp bảo vệ an toàn chống các loại virus truyền nhiễm qua tay nắm cửa. Đây là công nghệ xử lý bề mặt kháng khuẩn đầu tiên trên thị trường, thích hợp với những công
                                    trình có tiêu chuẩn sạch sẽ nghiêm ngặt như bệnh viện, trường học.</li>
                            </ul>
                            <img src="{{ asset('customer/images/img-product/CuanhomRoto/xulybemat-2.png') }}" alt="Xử lý bề mặt">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
