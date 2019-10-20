create table 'users'(
    'name' longtext not null,
    'username' longtext not null primary key unique,
    'pass' longtext not null,
    'email' longtext not null,
    'admin' int(2) not null,
)

create table 'articles'(
    'articles_id' int(10) unsigned auto_increment not null primary key,
    'title' longtext,
    'content' longtext,
    'images' longblob,
)

insert into 'users'
values 
(N'Nguyễn Ngọc Hà', 'nnh', '123', 'hann@gmail.com', '1'),
(N'Đặng Linh Trang', 'dlt', '123', 'trangdl@gmail.com', '1'),
(N'Nguyễn Thị Hạnh', 'nth', '123', 'hanhnt@gmail.com', '0'),
(N'Nguyễn Tiến Đạt', 'ntd', '123', 'ntd@gmail.com', '0');

insert into 'articles'
values 
('' ,N'Đây là tiêu đề bài viết đầu', N'Đây là nội dung bài viết số 1', 'anh1.jpg'),
('' ,'This is the title of article number 2', 'This is the content of articles number 2', 'anh2.jpg'),
('' ,N'Tiêu đề bài viết số 3', N'Nội dung bài viết số 3', 'anh3.jpg'),
('' ,'Title of article number 4', 'Content of article number 4', 'anh4.jpg'),
('' ,N'Nhà thờ đá Sapa', N'Nhà thờ Đá Sapa tọa lạc ngay ở trung tâm thị trấn Sapa,
được xây dựng từ năm 1895 được coi là một dấu ấn kiến trúc cổ toàn vẹn nhất của 
người Pháp còn sót lại. Nhà thờ đã được tôn tạo và bảo tồn, trở thành một hình 
ảnh không thể thiếu khi nhắc đến thị trấn Sapa mù sương.', 'anh5.jpg');
