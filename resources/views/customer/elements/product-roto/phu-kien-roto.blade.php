@extends('customer.layouts.app')

@section('title', 'Phụ kiện đồng bộ Roto')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('customer/css/style-nhom-roto.css') }}">
@endsection

@section('content')
    <div class="title ">
        <h1>Phụ kiện đồng bộ Roto</h1>
        <div class="link" style="z-index: 2;">
            <a href="{{ route('customer.product.index') }}">Sản phẩm</a> &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;
            <a href="#"><strong>Phụ kiện đồng bộ Roto</strong></a>
        </div>
    </div>
    <div class="main-content">
        <div class="container">
            <div class="row">
                <h3>Phụ kiện đồng bộ Roto</h3>
                <p style="text-align:center">Roto là tập đoàn dẫn đầu về công nghệ phụ kiện trong ngành sản xuất cửa. <br> Phụ kiện Roto được sản xuất và kiểm định độc lập bởi tổ chức IFT ROSENHEIM theo các tiêu chuẩn châu Âu về tính năng vận hành, <br> độ bền – Tiêu chuẩn: EN 1191,
                    EN 12400; về các điều kiện ăn mòn bề mặt sản phẩm – Tiêu chuẩn: EN ISO 9227, EN 1670. Sản phẩm phù hợp với môi trường và khí hậu Việt Nam.</p>
                <h2>Phụ kiện cửa đi</h2>
                <div class="small-container single-product">
                    <div class="row">
                        <div class="col-2">
                            <img src="{{ asset('customer/images/img-product/PhukienRoto/truot-patio-inowa/PK-Patio-Inowa.jpg') }}" width="100%" id="productImg">
                            <div class="small-img-row">
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/truot-patio-inowa/PK-Patio-Inowa-2.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/truot-patio-inowa/PK-Patio-Inowa-3.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/truot-patio-inowa/PK-Patio-Inowa.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/truot-patio-inowa/PK-patio-inowa-5.jpg') }}" width="100%" class="small-img">
                                </div>

                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/truot-patio-inowa/PK-patio-inowa-6.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/truot-patio-inowa/PK-patio-inowa-7.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/truot-patio-inowa/PK-patio-inowa-8.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/truot-patio-inowa/PK-patio-inowa-9.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/truot-patio-inowa/PK-patio-inowa-10.jpg') }}" width="100%" class="small-img">
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <h3>CỬA TRƯỢT PATIO INOWA</h3>
                            <span>Innovative hardware for tightly sealed sliding systems</span>
                            <i>Kín khít vượt trội</i>
                            <p>Roto Patio Inowa là tiêu biểu cho công nghệ phụ kiện cửa trượt hoàn toàn mới dành cho cửa trượt với trọng lượng lên tới 250 kg. Khi đóng cửa, chuyển động đóng cánh vuông góc với khung cửa đầy sáng tạo kết hợp với công nghệ
                                giảm chấn “soft close” giúp vận hành cánh cửa dễ dàng, thuận tiện.</p>
                            <ul>
                                <li>Intelligent sliding: Công nghệ trượt thông minh giúp vận hành cánh cửa dễ dàng và thuận tiện, không tốn nhiều lực</li>
                                <li>Độ kín khít cao với hệ thống gioăng cao su bao quanh cánh</li>
                                <li>Tăng cường an ninh với hệ thống phụ kiện cửa nhôm kính đạt tiêu chuẩn chống trộm RC2</li>
                                <li>Công nghệ phụ kiện cửa đi ẩn phù hợp với nhiều hệ proflie với thiết kế thanh mảnh, hiện đại</li>
                            </ul>
                            <p>Chiều rộng (hèm) cánh: Max. 1500mm <br> Chiều cao (hèm) cánh: Max. 3000mm <br> Cân nặng cánh: Max. 250kg</p>
                        </div>
                        <div class="col-2">
                            <h3>CỬA NHẤC TRƯỢT PATIO LIFT</h3>
                            <span>Roto hardware Patio Lift & Slide</span>
                            <i>Vận hành êm nhẹ những cánh cửa khổng lồ</i>
                            <ul>
                                <li>Hệ thống phụ kiện cửa trượt ứng dụng linh hoạt với tải trọng cánh từ 150kg – 400kg</li>
                                <li>Phụ kiện cửa nhôm kính có thể sử dụng với thanh profile nhôm có thiết kế hiện đại, thanh mảnh</li>
                                <li>Ổ bi của con lăn được bọc đệm nhựa pvc với độ bền cao, giúp con lăn vận hành mượt mà, cánh cửa chuyển động êm ái</li>
                                <li>Thanh chốt đa điểm – loại phụ kiện cửa đi có khả năng lắp đặt bổ sung nòng khoá để tăng cường an ninh</li>
                            </ul>
                            <p>
                                Chiều rộng cánh: Max. 3000mm <br> Chiều cao cánh: Max. 3100mm <br> Cân nặng cánh: Max. 400kg</p>
                        </div>
                        <div class="col-2">
                            <img src="{{ asset('customer/images/img-product/PhukienRoto/CDNT/cuanhactruot.jpg') }}" width="100%" id="productImg">
                            <div class="small-img-row">
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/CDNT/pk-patiolift-2.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/CDNT/pk-patiolift-3.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/CDNT/pk-patiolift-4.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/CDNT/pk-patiolift-5.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/CDNT/pk-patiolift.jpg') }}" width="100%" class="small-img">
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <img src="{{ asset('customer/images/img-product/PhukienRoto/patio-alversa/PK-Patio-Alversa.jpg') }}" width="100%" id="productImg">
                            <div class="small-img-row">
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/patio-alversa/PK-Patio-Alversa-2.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/patio-alversa/PK-Patio-Alversa.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/patio-alversa/PK-Patio-Alversa-3.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/patio-alversa/PK-Patio-Alversa-4.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/patio-alversa/PK-Patio-Alversa-5.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/patio-alversa/PK-Patio-Alversa-6.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/patio-alversa/PK-Patio-Alversa-7.jpg') }}" width="100%" class="small-img">
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <h3>CỬA LẬT TRƯỢT PATIO ALVERSA</h3>
                            <span>Roto hardware Patio Alversa</span>
                            <i>Lưu thông không khí, tiết kiệm không gian</i>
                            <p>Roto Patio Alversa là sự kết hợp hoàn hảo các tính năng ưu việt nhất của một cánh cửa trong hệ thống phụ kiện Roto, là bước đi chiến lược để tối giản hệ thống phụ kiện cửa, trong khi vẫn đảm bảo chất lượng tối ưu. Patio Alversa
                                là hệ phụ kiện dành cho cửa trượt song song kết hợp quay lật, với tiêu chí:</p>
                            <ul>
                                <li>Phụ kiện cửa trượt tích hợp 2 chế độ Lật – Trượt, tương thích với nhiều hệ cửa</li>
                                <li>Lắp đặt nhanh gọn và dễ dàng</li>
                                <li>Phụ kiện cửa nhôm kính đáp ứng nhu cầu của khách hàng về công năng và thiết kế</li>
                                <li>Tối ưu hoá chi phí sản xuất và vận chuyển</li>
                                <li>Hệ thống khoá trung tâm, tay nắm và hệ phụ kiện cửa đi được đồng bộ hoá </li>
                            </ul>
                            <p>Chiều rộng cánh: Max. 2000mm <br> Chiều cao cánh: Max. 2700mm <br> Cân nặng cánh: Max. 200kg</p>
                        </div>
                        <div class="col-2">
                            <h3>CỬA GẤP TRƯỢT PATIO FOLD</h3>
                            <span>Roto hardware Patio Fold & Slide</span>
                            <i>Mở rộng tầm nhìn, kết nối không gian</i>
                            <p>Hệ thống phụ kiện Gấp – trượt xoá tan rào cản về không gian, giúp kết nối các phòng trong nhà, hoặc không gian trong nhà với cảnh quan xung quanh.</p>
                            <ul>
                                <li>Phụ kiện cửa đi lùa giúp các cánh có thể gấp linh hoạt về hai phía, tạo lối đi thông thoáng và tối ưu hoá diện tích sử dụng trong căn nhà</li>
                                <li>Phụ kiện cửa nhôm kính có thể lắp kết hợp với hệ phụ kiện Quay – lật để thoáng khí vào ban đêm</li>
                                <li>Đa dạng quy cách vận hành về phụ kiện cửa đi đối với cửa mở vào trong hoặc mở ra ngoài</li>
                                <li>Thiết kế lớp lông bàn chải trên con lăn giúp hạn chế bụi bẩn trên ray trượt</li>
                            </ul>
                            <p>

                                Chiều rộng cánh mở sát khung: 480 – 1230mm <br> Chiều rộng cánh gấp: 480 – 930mm <br> Chiều cao cánh: 680 – 2830mm <br> Cân nặng cánh: Max. 100kg <br> Chiều rộng khung bao: Max. 6000mm</p>
                        </div>
                        <div class="col-2">
                            <img src="{{ asset('customer/images/img-product/PhukienRoto/patio-fold/pk-patio-fold-1.jpg') }}" width="100%" id="productImg">
                            <div class="small-img-row">
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/patio-fold/pk-patio-fold-2.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/patio-fold/pk-patio-fold-1.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/patio-fold/pk-patio-fold-3.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/patio-fold/pk-patio-fold-4.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/patio-fold/pk-patio-fold-5.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/patio-fold/pk-patio-fold-6.jpg') }}" width="100%" class="small-img">
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <img src="{{ asset('customer/images/img-product/PhukienRoto/CDMQ/banle.jpg') }}" width="100%" id="productImg">
                            <div class="small-img-row">
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/CDMQ/loikhoa.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/CDMQ/banle.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/CDMQ/banve.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/CDMQ/taynam.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/CDMQ/thankhoa.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/CDMQ/thankhoa-2.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/CDMQ/vaukhoa.jpg') }}" width="100%" class="small-img">
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <h3>Cửa đi mở quay</h3>
                            <span>Roto hardware system for opening door</span>
                            <i>Hệ thống bản lề cho cửa đi mở quay ngoài, cửa đi mở quay trong</i>
                            <p>Hệ thống khóa đa điểm cơ học Roto Safe H:</p>
                            <ul>
                                <li>Là loại phụ kiện cửa đi mở quay vận hành khoá mở đơn giản, nhẹ nhàng</li>
                                <li>Lưỡi gà có khả năng đảo chiều mà không cần tháo rời thân khoá, thuận tiện cho thi công lắp đặt tại công trình</li>
                                <li>Tích hợp đệm nhựa tiêu âm trên bề mặt lưỡi gà để hạn chế diện tích tiếp xúc giữa bề mặt kim loại, giúp cánh cửa đóng mở nhẹ nhàng</li>
                                <li>Phụ kiện cửa nhôm cao cấp – thanh chốt đa điểm được thiết kế thành từng phần có thể tháo rời, tối ưu hoá quy trình sản xuất, đóng gói và vận chuyển</li>
                            </ul>
                            <p>Bản lề đa dạng về quy cách tải trọng và thiết kế, với 2 công nghệ xử lý bề mặt cơ bản là powder-coating hoặc anodization, cho lựa chọn màu sắc và bề mặt hoàn thiện phong phú, phù hợp với nhiều phong cách thiết kế <br>Bộ sản
                                phẩm phụ kiện cửa Roto đồng bộ bao gồm: Bản lề, thanh khóa và hệ thống chốt đa điểm, lõi khóa, tay nắm, miệng khóa và vấu hãm lắp khung.</p>
                        </div>
                        <div class="col-2">
                            <h3>CỬA ĐI TRƯỢT ROTO INLINE</h3>
                            <span>Roto hardware for simple sliding door</span>
                            <i>Mở rộng tầm nhìn, kết nối không gian</i>
                            <p>Hệ thống phụ kiện Gấp – trượt xoá tan rào cản về không gian, giúp kết nối các phòng trong nhà, hoặc không gian trong nhà với cảnh quan xung quanh.</p>
                            <ul>
                                <li>Phụ kiện cửa đi lùa giúp các cánh có thể gấp linh hoạt về hai phía, tạo lối đi thông thoáng và tối ưu hoá diện tích sử dụng trong căn nhà</li>
                                <li>Phụ kiện cửa nhôm kính có thể lắp kết hợp với hệ phụ kiện Quay – lật để thoáng khí vào ban đêm</li>
                                <li>Đa dạng quy cách vận hành về phụ kiện cửa đi đối với cửa mở vào trong hoặc mở ra ngoài</li>
                                <li>Thiết kế lớp lông bàn chải trên con lăn giúp hạn chế bụi bẩn trên ray trượt</li>
                            </ul>
                            <p>

                                Chiều rộng cánh mở sát khung: 480 – 1230mm <br> Chiều rộng cánh gấp: 480 – 930mm <br> Chiều cao cánh: 680 – 2830mm <br> Cân nặng cánh: Max. 100kg <br> Chiều rộng khung bao: Max. 6000mm</p>
                        </div>
                        <div class="col-2">
                            <img src="{{ asset('customer/images/img-product/PhukienRoto/patio-fold/pk-patio-fold-1.jpg') }}" width="100%" id="productImg">
                            <div class="small-img-row">
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/patio-fold/pk-patio-fold-2.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/patio-fold/pk-patio-fold-1.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/patio-fold/pk-patio-fold-3.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/patio-fold/pk-patio-fold-4.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/patio-fold/pk-patio-fold-5.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/patio-fold/pk-patio-fold-6.jpg') }}" width="100%" class="small-img">
                                </div>
                            </div>
                        </div>
                        <h2 style="padding-top:20px">Phụ kiện cửa sổ</h2>
                        <div class="col-2">
                            <img src="{{ asset('customer/images/img-product/PhukienRoto/CSMT/cuaso-truot.jpg') }}" width="100%" id="productImg">
                            <div class="small-img-row">
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/CSMT/cuaso-truot-1.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/CSMT/cuaso-truot.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/CSMT/cuaso-truot-2.jpg')}}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/CSMT/cuaso-truot-3.jpg') }}" width="100%" class="small-img">
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <h3>PHỤ KIỆN CỬA SỔ TRƯỢT</h3>
                            <span>Roto hardware system for simple sliding window</span>
                            <p>Hệ phụ kiện cửa sổ lùa nhôm xingfa đơn giản, hiệu quả cho cửa trượt</p>
                            <ul>
                                <li>Hệ thống trượt Modular sliding system</li>
                                <li>Phù hợp với hệ thống khoá đơn điểm hoặc đa điểm</li>
                                <li>Cấu tạo con lăn của loại phụ kiện roto cửa nhôm xingfa này chắc chắn giúp cánh cửa di chuyển thăng bằng và êm nhẹ. Lựa chọn con lăn đơn hoặc con lăn đôi phong phú với tải trọng tối đa 200kg</li>
                                <li>Tay nắm: Đa dạng về chủng loại, kích thước, kiểu dáng và màu sắc: Roto Line, Roto Swing cho cửa đi, cửa sổ trượt; Roto Freestyle được thiết kế chuyên biệt cho cửa trượt, tay nắm âm, tay nắm D, …</li>
                                <li>Thanh chốt đa điểm phụ kiện cửa nhôm có chốt chuyển động ngược chiều giúp gia tăng độ an toànp với những căn nhà có diện tích phòng rộng, bố trí nội thất thông thoáng.</li>
                            </ul>
                            <p>Hệ thống sản phẩm đồng bộ bao gồm: Con lăn, thanh khoá, tay nắm, vấu hãm lắp trên khung</p>
                        </div>
                        <div class="col-2">
                            <h3>CỬA SỔ MỞ QUAY TRONG</h3>
                            <span>Roto Inward opening window</span>
                            <i>Hệ thống phụ kiện cửa sổ mở quay đa chức năng.</i>
                            <p>Hệ cửa sổ mở quay trong của Roto có khả năng tích hợp hai chế độ Quay – Lật được phát minh bởi nhà sáng lập Roto-frank, đây là dòng sản phẩm làm nên thương hiệu của Roto trên toàn thế giới. Bên cạnh chức năng mở quay thông
                                thường, cánh cửa có thể mở lật để không khí lưu thông đồng thời chống xâm nhập từ bên ngoài.</p>
                            <p>Phụ kiện:</p>
                            <ul>
                                <li>Khả năng tích hợp khoá an toàn trên tay nắm giúp khoá cố định chế độ mở lật, đảm bảo an toàn cho trẻ nhỏ tại những toà nhà cao tầng.</li>
                                <li>Thanh khoá đa điểm – loại phụ kiện cửa nhôm chuyên dụng có thể tuỳ chỉnh chiều dài và số lượng vấu hãm theo chiều cao của cửa bằng hệ thống thanh nối phụ kiện.</li>
                            </ul>
                            <p>Ứng dụng:</p>
                            <ul>
                                <li>Phụ kiện cửa Roto phù hợp với những căn nhà có diện tích phòng rộng, bố trí nội thất thông thoáng.</li>
                                <li>Phù hợp với thiết kế cửa sổ, cửa đi ban công</li>
                                <li>Phù hợp với thiết kế phòng cần đảm bảo thông thoáng không khí cho sự phát triển của trẻ nhỏPhù hợp với thiết kế phòng cần đảm bảo thông thoáng không khí cho sự phát triển của trẻ nhỏ</li>
                            </ul>
                        </div>
                        <div class="col-2">
                            <img src="{{ asset('customer/images/img-product/PhukienRoto/CSMQT/cuaso-moquay-trong.jpg') }}" width="100%" id="productImg">
                            <div class="small-img-row">
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/CSMQT/cuaso-moquay-trong-1.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/CSMQT/cuaso-moquay-trong.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/CSMQT/cuaso-moquay-trong-3.png') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/CSMQT/cuaso-moquay-trong-3.jpg') }}" width="100%" class="small-img">
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <img src="{{ asset('customer/images/img-product/PhukienRoto/CSMQN/cuaso-moquayngoai.jpg') }}" width="100%" id="productImg">
                            <div class="small-img-row">
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/CSMQN/cuaso-moquayngoai-2.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/CSMQN/cuaso-moquayngoai.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/CSMQN/cuaso-moquayngoai-3.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/CSMQN/cuaso-moquayngoai-4.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/CSMQN/cuaso-moquayngoai-5.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/CSMQN/cuaso-moquayngoai-6.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/CSMQN/cuaso-moquayngoai-7.jpg') }}" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="{{ asset('customer/images/img-product/PhukienRoto/CSMQN/cuaso-moquayngoai-8.jpg') }}" width="100%" class="small-img">
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <h3>CỬA SỔ MỞ QUAY NGOÀI</h3>
                            <span>Roto hardware for outward opening window</span>
                            <i>Với hệ thống bản lề ma sát bằng thép không gỉ</i>
                            <p>Phụ kiện cửa sổ mở quay</p>
                            <ul>
                                <li>Sử dụng bản lề chữ A với góc mở tối đa 90 độ tăng khả năng đón gió cho căn phòng</li>
                                <li>Phụ kiện cửa Roto thuận tiện khi cần làm sạch mặt kính bên ngoài</li>
                            </ul>
                            <p>Phụ kiện cửa sổ mở hất</p>
                            <ul>
                                <li>Phụ kiện cửa nhôm dành cho cửa mở hất sử dụng bản lề chữ A với góc mở tối đa 45 độ, cho phép căn phòng thoáng khí trong điều kiện trời mưa trong khi hạn chế bị hắt nước mưa</li>
                                <li>Thanh hạn vị sử dụng sử dụng lực ma sát để giữ cánh ở trạng thái mở, hạn chế rủi ro bị gió giật cánh khi gặp gió lớn. Khi gặp gió lớn, cánh cửa sẽ tự động đóng vào nhằm mục đích giữ an toàn cho người sử dụng khi quên không
                                    đóng cửa</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
