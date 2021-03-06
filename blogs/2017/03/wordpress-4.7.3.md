#Ra mắt WordPress 4.7.3 - Phiên bản cập nhật bảo mật và bảo trì

Hiên tại WordPress 4.7.3 đã sẵn sàng để tải về. Đây là phiên bản cập nhật bảo mật cho tất cả các bản WordPress trước và bạn nên cập nhật các website của bạn càng sớm càng tốt.

WordPress 4.7.2 và các phiên bản trước đó gặp phải sáu lỗi bảo mật sau:

1. Lỗi cross-site scripting (XSS) thông qua metadata của tệp tinh đa phương tiện. Lỗi này được phát hiện bởi [Chris Andrè Dale](https://www.securesolutions.no/), [Yorick Koster](https://twitter.com/yorickkoster), và Simon P. Briggs.

1. Các control characters có thể vượt qua trình kiểm tra URL chuyển hướng. Phát hiện bởi [Daniel Chatfield](http://www.danielchatfield.com/).

1. Quản trị viên có thể sử dụng chức năng xoá file của plugin để xoá những file không mong muốn. Phát hiện bởi [xuliang](http://b.360.cn/).

1. Lỗi cross-site scripting (XSS) thông qua đường dẫn của video khi nhúng video Youtube vào bài viết. Phát hiện bởi [Marc Montpas](https://twitter.com/marcs0h).

1. Lỗi cross-site scripting (XSS) thông qua tên của taxonomy term. Phát hiện bởi [Delta](https://profiles.wordpress.org/deltamgm2).

1. Lỗi cross-site request forgery (CSRF) của tính năng Press This dẫn đến việc chiếm dụng tài nguyên của máy chủ đặt website. Phát hiện bởi Sipke Mellema.

Xin cảm mọi người đã tham gia phát hiện lỗi trong phiên bản này.

Ngoài việc vá các lỗi bảo mật như trên, WordPress 4.7.3 có 39 phần bảo trì cho phiên bản 4.7. Để biết thêm thông tin chi tiết, xem phần [ghi chú](https://codex.wordpress.org/Version_4.7.3) hoặc [danh sách thay đổi](https://core.trac.wordpress.org/query?status=closed&milestone=4.7.3&group=component&col=id&col=summary&col=component&col=status&col=owner&col=type&col=priority&col=keywords&order=priority).

[Tải WordPress 4.7.3](https://vi.wordpress.org) hoặc từ giao diện quản trị, tìm đến `Bảng tin → Cập nhật` và click vào nút `Cập nhật ngay bây giờ`. Những website hỗ trợ tự động cập nhật thì hiện tại đã được cập nhật lên WordPress 4.7.3 rồi.

Cảm ơn mọi người đã đóng góp vào phiên bản 4.7.3: [Aaron D. Campbell](https://profiles.wordpress.org/aaroncampbell/), [Adam Silverstein](https://profiles.wordpress.org/adamsilverstein/), [Alex Concha](https://profiles.wordpress.org/xknown/), [Andrea Fercia](https://profiles.wordpress.org/afercia/), [Andrew Ozz](https://profiles.wordpress.org/azaozz/), [asalce](https://profiles.wordpress.org/asalce/), [blobfolio](https://profiles.wordpress.org/blobfolio/), [bonger](https://profiles.wordpress.org/gitlost/), [Boone Gorges](https://profiles.wordpress.org/boonebgorges/), [Boro Sitnikovski](https://profiles.wordpress.org/bor0/), [Brady Vercher](https://profiles.wordpress.org/bradyvercher/), [Brandon Lavigne](https://profiles.wordpress.org/drrobotnik/), [Bunty](https://profiles.wordpress.org/bhargavbhandari90/), [ccprog](https://profiles.wordpress.org/ccprog/), [chetansatasiya](https://profiles.wordpress.org/ketuchetan/), [David A. Kennedy](https://profiles.wordpress.org/davidakennedy/), [David Herrera](https://profiles.wordpress.org/dlh/), [Dhanendran](https://profiles.wordpress.org/dhanendran/), [Dion Hulse](https://profiles.wordpress.org/dd32/), [Dominik Schilling (ocean90)](https://profiles.wordpress.org/ocean90/), [Drivingralle](https://profiles.wordpress.org/drivingralle/), [Ella Van Dorpe](https://profiles.wordpress.org/iseulde/), [Gary Pendergast](https://profiles.wordpress.org/pento/), [Ian Dunn](https://profiles.wordpress.org/iandunn/), [Ipstenu (Mika Epstein)](https://profiles.wordpress.org/ipstenu/), [James Nylen](https://profiles.wordpress.org/jnylen0/), [jazbek](https://profiles.wordpress.org/jazbek/), [Jeremy Felt](https://profiles.wordpress.org/jeremyfelt/), [Jeremy Pry](https://profiles.wordpress.org/jpry/), [Joe Hoyle](https://profiles.wordpress.org/joehoyle/), [Joe McGill](https://profiles.wordpress.org/joemcgill/), [John Blackbourn](https://profiles.wordpress.org/johnbillion/), [John James Jacoby](https://profiles.wordpress.org/johnjamesjacoby/), [Jonathan Desrosiers](https://profiles.wordpress.org/desrosj/), [Kelly Dwan](https://profiles.wordpress.org/ryelle/), [Marko Heijnen](https://profiles.wordpress.org/markoheijnen/), [MatheusGimenez](https://profiles.wordpress.org/matheusgimenez/), [Mike Nelson](https://profiles.wordpress.org/mnelson4/), [Mike Schroder](https://profiles.wordpress.org/mikeschroder/), [Muhammet Arslan](https://profiles.wordpress.org/codegeass/), [Nick Halsey](https://profiles.wordpress.org/celloexpressions/), [Pascal Birchler](https://profiles.wordpress.org/swissspidy/), [Paul Bearne](https://profiles.wordpress.org/pbearne/), [pavelevap](https://profiles.wordpress.org/pavelevap/), [Peter Wilson](https://profiles.wordpress.org/peterwilsoncc/), [Rachel Baker](https://profiles.wordpress.org/rachelbaker/), [reldev](https://profiles.wordpress.org/reldev/), [Robert O’Rourke](https://profiles.wordpress.org/sanchothefat/), [Ryan Welcher](https://profiles.wordpress.org/welcher/), [Sanket Parmar](https://profiles.wordpress.org/sanketparmar/), [Sean Hayes](https://profiles.wordpress.org/seanchayes/), [Sergey Biryukov](https://profiles.wordpress.org/sergeybiryukov/), [Stephen Edgar](https://profiles.wordpress.org/netweb/), [triplejumper12](https://profiles.wordpress.org/triplejumper12/), [Weston Ruter](https://profiles.wordpress.org/westonruter/), và [wpfo](https://profiles.wordpress.org/wpfo/).


