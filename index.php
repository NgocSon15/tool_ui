<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tạo kịch bản</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <style>
        tbody td {
            padding: 0 !important;
        }

        table tr td input {
            display: block;
            top:0;
            left:0;
            margin: 0;
            width: 100%;
            border: none !important;
            padding: 10px;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
<!-- Start header -->
<div class="fixed-top" style="background-color: #ffffff">
    <div class="container d-flex justify-content-between align-items-center">
        <a href="#">
            <img width="200px" height="100px" src="assets/img/logo.png">
        </a>
    </div>
</div>
<!-- End header -->

<!-- Start content -->
<section class="content">
    <section class="bg-light">
        <div class="container py-5" style="margin-top:100px">
            <div class="card shadow" style="border: none;  box-shadow: 0 0 2rem 0 rgb(136 152 170 / 15%);">
                <div class="card-header" style="background-color: #fff; border: none"><h3>Tạo kịch bản</h3></div>
                <div class="card-body" style="background-color: #f7fafc">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active mr-3" id="pills-home-tab" data-toggle="pill" href="#showoff" role="tab" aria-controls="pills-home" aria-selected="true">Showoff</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#stepquest" role="tab" aria-controls="pills-profile" aria-selected="false">Step Quest</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade" id="showoff" role="tabpanel" aria-labelledby="nav-showoff-tab">
                            <div class="card" style="border: none;  box-shadow: 0 0 2rem 0 rgb(136 152 170 / 15%);">
                                <div class="card-body">
                                    <form method="post" action="action/index.php">
                                        <div class="form-group">
                                            <label class="form-label" for="input-title">Tiêu đề</label>
                                            <input type="text" class="form-control" id="input-title" name="title" placeholder="Tiêu đề">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="input-author">Tác giả</label>
                                            <input type="text" class="form-control" id="input-author" name="author" placeholder="Tác giả">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="input-banner">Ảnh mô tả</label>
                                            <input type="text" class="form-control" id="input-banner" name="banner" placeholder="Id ảnh mô tả">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="input-desc">Mô tả</label>
                                            <textarea class="form-control" id="input-desc" name="desc"></textarea>
                                        </div>
                                        <div class="form-group" id="item-content">
                                            <label class="form-label">Nội dung kịch bản</label>
                                            <div class="card" style="background-color: #f7fafc">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label class="form-label" for="input-name">Tên đối tượng</label>
                                                        <input type="text" class="form-control" id="input-name" name="name[]" placeholder="Tên đối tượng">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="input-images">Id đối tượng</label>
                                                        <input type="text" class="form-control" id="input-images" name="images[]" placeholder="Id đối tượng, nhập cách nhau bởi dấu cách (VD: 10 11 12)">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="input-info">Giới thiệu ngắn gọn về đối tượng</label>
                                                        <textarea class="form-control" id="input-info" name="info[]"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="add-content" class="btn btn-primary" style="margin-bottom: 20px;">Thêm đối tượng</div>
                                        <br>
                                        <button type="submit" class="btn btn-success">Lưu kịch bản</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="stepquest" role="tabpanel" aria-labelledby="nav-stepquest-tab">
                            <div class="card" style="border: none;  box-shadow: 0 0 2rem 0 rgb(136 152 170 / 15%);">
                                <div class="card-body">
                                    <form method="post" action="action/interactive.php">
                                        <div class="form-group">
                                            <label class="form-label" for="input-title">Tiêu đề</label>
                                            <input type="text" class="form-control" id="input-title" name="title" placeholder="Tiêu đề">
                                        </div>
                                        <div class="form-group" id="question-content">
                                            <label class="form-label">Nội dung câu hỏi:</label>
                                            <div id="question-content">
                                                <div class="card" id="question-1" style="background-color: #f7fafc">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label class="form-label" for="input-type-1">Loại câu hỏi</label>
                                                            <select class="form-control" id="input-type-1" name="type[]">
                                                                <option value="single">Trắc nghiệm một đáp án đúng</option>
                                                                <option value="multi">Trắc nghiệm nhiều đáp án đúng</option>
                                                                <option value="image">Xem hình đoán từ</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group" id="input-question-1">
                                                            <label class="form-label" for="input-question">Câu hỏi</label>
                                                            <textarea class="form-control" id="input-question" name="question[]" placeholder="Nội dung câu hỏi"></textarea>
                                                        </div>
                                                        <div class="form-group" id="input-option-1">
                                                            <label class="form-label" for="input-option">Các lựa chọn</label>
                                                            <textarea class="form-control" id="input-option" name="option[]" placeholder="Nhập mỗi lựa chon một dòng"></textarea>
                                                        </div>
                                                        <div class="form-group" id="input-image-1" style="display: none">
                                                            <label class="form-label" for="input-image">Hình ảnh</label>
                                                            <input type="text" class="form-control" id="input-image" name="image[]" placeholder="Id hình ảnh">
                                                        </div>
                                                        <div class="form-group" id="input-multi-answer-1">
                                                            <label class="form-label" for="input-answer">Đáp án</label>
                                                            <textarea class="form-control" id="input-answer" name="answer[]" placeholder="Nếu có nhiều đáp án, nhập mỗi đáp án một dòng"></textarea>
                                                        </div>
                                                    </div>
                                                    <script>
                                                        document.getElementById('input-type-1').onchange = function () {
                                                            if(this.value == 'image') {
                                                                document.getElementById('input-image-1').style.display = "block";
                                                                document.getElementById('input-question-1').style.display = "none";
                                                                document.getElementById('input-option-1').style.display = "none";
                                                            } else if (this.value == 'single') {
                                                                document.getElementById('input-image-1').style.display = "none";
                                                                document.getElementById('input-question-1').style.display = "block";
                                                                document.getElementById('input-option-1').style.display = "block";
                                                            } else {
                                                                document.getElementById('input-image-1').style.display = "none";
                                                                document.getElementById('input-question-1').style.display = "block";
                                                                document.getElementById('input-option-1').style.display = "block";
                                                            }
                                                        }
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="add-question" class="btn btn-primary" style="margin-bottom: 20px;">Thêm câu hỏi</div>
                                        <br>
                                        <button type="submit" class="btn btn-success">Lưu kịch bản</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<!-- End content -->
<!-- Start script -->
<script src="assets/js/jquery-1.11.0.min.js"></script>
<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/templatemo.js"></script>
<script src="assets/js/custom.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    let item = document.getElementById('item-content');
    let question = document.getElementById('question-content');
    let index = 2;
    let question_index = 2;

    document.getElementById('add-question').onclick = function () {
        let card = document.createElement('div');
        card.setAttribute('id', 'question-' + question_index);
        card.setAttribute('class', 'card mt-3');
        card.setAttribute('style', 'background-color: #f7fafc');

        let card_body = document.createElement('div');
        card_body.setAttribute('class', 'card-body');

        let form_group1 = document.createElement('div');
        form_group1.setAttribute('class', 'form-group');

        let label_type = document.createElement('label');
        label_type.setAttribute('class', 'form-label');
        label_type.innerText = 'Loại câu hỏi';

        let select_type = document.createElement('select');
        select_type.setAttribute('class', 'form-control');
        select_type.setAttribute('id', 'input-type-' + question_index);
        select_type.setAttribute('name', 'type[]');

        let option1 = document.createElement('option');
        option1.setAttribute('value', 'single');
        option1.innerText = 'Trắc nghiệm một đáp án đúng';

        let option2 = document.createElement('option');
        option2.setAttribute('value', 'multi');
        option2.innerText = 'Trắc nghiệm nhiều đáp án đúng';

        let option3 = document.createElement('option');
        option3.setAttribute('value', 'image');
        option3.innerText = 'Xem hình đoán từ';

        select_type.appendChild(option1);
        select_type.appendChild(option2);
        select_type.appendChild(option3);

        form_group1.appendChild(label_type);
        form_group1.appendChild(select_type);

        let form_group2 = document.createElement('div');
        form_group2.setAttribute('class', 'form-group');
        form_group2.setAttribute('id', 'input-question-' + question_index);

        let label_question = document.createElement('label');
        label_question.setAttribute('class', 'form-label');
        label_question.innerText = 'Câu hỏi';
        
        let input_question = document.createElement('textarea');
        input_question.setAttribute('class', 'form-control');
        input_question.setAttribute('name', 'question[]');
        input_question.setAttribute('placeholder', 'Nội dung câu hỏi');
        
        form_group2.appendChild(label_question);
        form_group2.appendChild(input_question);

        let form_group3 = document.createElement('div');
        form_group3.setAttribute('class', 'form-group');
        form_group3.setAttribute('id', 'input-option-' + question_index);

        let label_option = document.createElement('label');
        label_option.setAttribute('class', 'form-label');
        label_option.innerText = 'Các lựa chọn';

        let input_option = document.createElement('textarea');
        input_option.setAttribute('class', 'form-control');
        input_option.setAttribute('name', 'option[]');
        input_option.setAttribute('placeholder', 'Nhập mỗi lựa chon một dòng');

        form_group3.appendChild(label_option);
        form_group3.appendChild(input_option);

        let form_group4 = document.createElement('div');
        form_group4.setAttribute('class', 'form-group');
        form_group4.setAttribute('id', 'input-image-' + question_index);
        form_group4.setAttribute('style', 'display: none');

        let label_image = document.createElement('label');
        label_image.setAttribute('class', 'form-label');
        label_image.innerText = 'Hình ảnh';

        let input_image = document.createElement('input');
        input_image.setAttribute('type', 'text');
        input_image.setAttribute('class', 'form-control');
        input_image.setAttribute('name', 'image[]');
        input_image.setAttribute('placeholder', 'Id hình ảnh');

        form_group4.appendChild(label_image);
        form_group4.appendChild(input_image);

        let form_group5 = document.createElement('div');
        form_group5.setAttribute('class', 'form-group');
        form_group5.setAttribute('id', 'input-multi-answer-' + question_index);
        
        let label_answer1 = document.createElement('label');
        label_answer1.setAttribute('class', 'form-label');
        label_answer1.innerText = 'Đáp án';

        let input_multi_answer = document.createElement('textarea');
        input_multi_answer.setAttribute('class', 'form-control');
        input_multi_answer.setAttribute('name', 'answer[]');
        input_multi_answer.setAttribute('placeholder', 'Nếu có nhiều đáp án, nhập mỗi đáp án một dòng');

        form_group5.appendChild(label_answer1);
        form_group5.appendChild(input_multi_answer);

        let del_btn = document.createElement('div');
        del_btn.value = question_index;
        del_btn.setAttribute('id', 'delete-question');
        del_btn.setAttribute('class', 'btn btn-danger bi-trash');
        del_btn.onclick = function () {
            let value = this.value;
            let rm = document.getElementById('question-' + value);
            rm.remove();
        };
        
        card_body.appendChild(form_group1);
        card_body.appendChild(form_group2);
        card_body.appendChild(form_group3);
        card_body.appendChild(form_group4);
        card_body.appendChild(form_group5);
        card_body.appendChild(del_btn);
        card.appendChild(card_body);

        script = document.createElement('script');
        script.innerText = "document.getElementById('input-type-" + question_index + "').onchange = function () {" +
        "if(this.value == 'image') {" +
            "document.getElementById('input-image-" + question_index + "').style.display = 'block';" +
            "document.getElementById('input-question-" + question_index + "').style.display = 'none';" +
            "document.getElementById('input-option-" + question_index + "').style.display = 'none';" +
        "} else if (this.value == 'single') {" +
            "document.getElementById('input-image-" + question_index + "').style.display = 'none';" +
            "document.getElementById('input-question-" + question_index + "').style.display = 'block';" +
            "document.getElementById('input-option-" + question_index + "').style.display = 'block';" +
        "} else {" +
            "document.getElementById('input-image-" + question_index + "').style.display = 'none';" +
            "document.getElementById('input-question-" + question_index + "').style.display = 'block';" +
            "document.getElementById('input-option-" + question_index + "').style.display = 'block';" +
        "}" +
    "}";

        question.appendChild(card);
        question.appendChild(script);
        question_index++;
    };

    document.getElementById('add-content').onclick = function() {
        let card = document.createElement('div');
        card.setAttribute('id', 'content-' + index);
        card.setAttribute('class', 'card mt-3');
        card.setAttribute('style', 'background-color: #f7fafc')

        let card_body = document.createElement('div');
        card_body.setAttribute('class', 'card-body');

        let form_group1 = document.createElement('div');
        form_group1.setAttribute('class', 'form-group');

        let label_name = document.createElement('label');
        label_name.setAttribute('class', 'form-label');
        label_name.innerText = 'Tên đối tượng';

        let input_name = document.createElement('input');
        input_name.setAttribute('class', 'form-control');
        input_name.setAttribute('type', 'text');
        input_name.setAttribute('name', 'name[]');
        input_name.setAttribute('id', 'input-name');
        input_name.setAttribute('placeholder', 'Tên vật phẩm');

        form_group1.appendChild(label_name);
        form_group1.appendChild(input_name);

        card_body.appendChild(form_group1);

        let form_group2 = document.createElement('div');
        form_group2.setAttribute('class', 'form-group');

        let label_images = document.createElement('label');
        label_images.setAttribute('class', 'form-label');
        label_images.innerText = 'Id đối tượng';
        
        let input_images = document.createElement('input');
        input_images.setAttribute('class', 'form-control');
        input_images.setAttribute('type', 'text');
        input_images.setAttribute('name', 'images[]');
        input_images.setAttribute('id', 'input-images');
        input_images.setAttribute('placeholder', 'Id đối tượng, nhập cách nhau bởi dấu cách (VD: 10 11 12)');

        form_group2.appendChild(label_images);
        form_group2.appendChild(input_images);

        card_body.appendChild(form_group2);

        let form_group3 = document.createElement('div');
        form_group3.setAttribute('class', 'form-group');

        let label_info = document.createElement('label');
        label_info.setAttribute('class', 'form-label');
        label_info.innerText = 'Giới thiệu ngắn gọn về đối tượng';

        let input_info = document.createElement('textarea');
        input_info.setAttribute('class', 'form-control');
        input_info.setAttribute('name', 'info[]');
        input_info.setAttribute('id', 'input-info');

        form_group2.appendChild(label_info);
        form_group2.appendChild(input_info);

        card_body.appendChild(form_group3);

        let del_btn = document.createElement('div');
        del_btn.value = index;
        del_btn.setAttribute('id', 'delete-content');
        del_btn.setAttribute('class', 'btn btn-danger bi-trash');
        del_btn.onclick = function () {
            let value = this.value;
            let rm = document.getElementById('content-' + value);
            rm.remove();
        };

        card_body.appendChild(del_btn);

        card.appendChild(card_body);

        item.appendChild(card);

        index++;
    }
</script>
<!-- End script -->
</body>

</html>
