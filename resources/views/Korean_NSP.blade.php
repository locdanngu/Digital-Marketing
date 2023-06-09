<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/NSP.css">
    <title>NSP Korean page</title>
</head>

<body>
    <header>
        <p class="txtheader">NSP 베트남 서비스 오픈</p>
    </header>
    <hr>
    <main>
        <div class="box box1">
            <img src="images/nsp.png">
            <p>NSP는 한국에 본사를 둔 
            </p>
            <p>자동차 부품 제조, 공급 및 판매 회사입니다. </p>
            <p>우리는 합리적인 가격으로 최고의 품질을 제공합니다.</p>
        </div>
        <div class="box box2">
            <p class="txt1box2">Vietnam의 신규 론칭을 기념하며 </p>
            <p class="txt1box2">브랜드 관련 소식을 전하고,</p>
            <p class="txt1box2">NSP Vina 행사 우선 초대를 위해 </p>
            <p class="txt1box2">수신 정보를 수집하고 있습니다.</p>
            <p class="txt2box2">주소 입력 시 추첨을 통해 </p>
            <p class="txt2box2">소정의 경품을 발송해드립니다.</p>
        </div>
        <form class="box box3" action="" method="post" id="formbox3">
            @csrf
            <div class="input-wrapper">
                <span class="label"><span style="color:red">*</span> 이름</span>
                <input type="text" id="nameinput">
            </div>
            <p id="errortext"><i class="bi bi-exclamation-circle-fill"></i> 이름은 필수입력 항목입니다.</p>
            <div class="input-wrapper">
                <span class="label"><span style="color:red">*</span> 이메일</span>
                <input type="text" id="emailinput">
            </div>
            <p id="errortext2"><i class="bi bi-exclamation-circle-fill"></i> 이메일은 필수입력 항목입니다.</p>
            <div class="input-wrapper">
                <span class="label">주소</span>
                <input type="text">
            </div>
            <p class="txt1box3">- 주소 입력시 추첨을 통해 해당 주소로 경품을 보내드립니다.</p>
            <div class="input-wrapper">
                <span class="label">연락처</span>
                <input type="text">
            </div>
            <div class="input-wrapper">
                <span class="label">회사명</span>
                <input type="text">
            </div>
            <div class="bodybox3">
                <div class="input-wrapper">
                    <span class="label">직무</span>
                    <input type="text">
                </div>
                <div style="width: 5%;"></div>
                <div class="input-wrapper">
                    <span class="label">직급</span>
                    <input type="text">
                </div>
            </div>
            <p class="txt2box3"><span>*</span> 개인정보 수집 및 마케팅 수신 동의</p>
            <p class="txt3box3">서비스와 관련된 신상품 소식, 이벤트 안내, 고객 혜택 등 다양한 정보를 제공합니다.</p>
            <p class="txt3box3">입력하신 개인정보는 내부 방침에 의해 보호되며 외부로 유출되지 않습니다.</p>
            <div class="footbox3">
                <div>
                    <input type="checkbox" class="checkbox" id="cb1">
                    <label>동의함</label>
                </div>
                <div style="width: 10%;"></div>
                <div>
                    <input type="checkbox" class="checkbox" id="cb2">
                    <label>동의안함</label>
                </div>
            </div>
            <p id="errortext3"><i class="bi bi-exclamation-circle-fill"></i> 개인정보 수집 동의에 체크해주세요</p>
            <div>
                <button class="btnbox3" onclick="sendForm(event)">제출</button>
            </div>
        </form>

    </main>
    <hr>
    <footer>
        <div>
            <a href=""><img src="images/ins.png" class="icon"></a>
            <a href=""><img src="images/fb.png" class="icon"></a>
            <a href=""><img src="images/yt.png" class="icon"></a>
        </div>
    </footer>



    <script>
    var inputWrappers = document.querySelectorAll('.input-wrapper');
    inputWrappers.forEach(function(inputWrapper) {
        var labelWidth = inputWrapper.querySelector('.label').offsetWidth + 35;
        inputWrapper.querySelector('input').style.paddingLeft = labelWidth + 'px';
    });

    function sendForm(event) {
        event.preventDefault();
        var nameInput = document.getElementById("nameinput").value;
        var emailInput = document.getElementById("emailinput").value;
        var errorText = document.getElementById("errortext");
        var errorText2 = document.getElementById("errortext2");
        var form = document.getElementById("formbox3");

        var isChecked1 = document.getElementById("cb1").checked;
        var isChecked2 = document.getElementById("cb2").checked;
        var errorText3 = document.getElementById("errortext3");
        
        if (nameInput === "" && emailInput === "") {
            errorText.style.display = "block";
            errorText2.style.display = "block";
        } else if (emailInput === "") {
            errorText2.style.display = "block";
            errorText.style.display = "none";
        } else if (nameInput === "") {
            errorText.style.display = "block";
            errorText2.style.display = "none";
        } else {
            errorText.style.display = "none";
            errorText2.style.display = "none";
            if (isChecked1 && isChecked2) {
                errorText3.style.display = "block";
            } else if (isChecked1) {
                form.submit();
            } else if (isChecked2) {
                errorText3.style.display = "block";
            } else {
                errorText3.style.display = "block";
            }
        }
    }
    </script>
</body>


</html>