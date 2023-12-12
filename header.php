<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Date" content="2023-12-04T11:05:30+09:00">
    <meta name="subject" content="asb">
    <meta name="Title" content="하림펫푸드 반응형웹">
    <meta name="author" content="작성자 이름">
    <meta name="distribution" content="배포자 이름">
    <meta name="description" content="하림펫푸드 반려동물을 위한 맛춤">
    <meta name="Copyright" content="하림">
    <meta name="Build" content="2023-12-04T11">
    <title>하림펫푸드 반응형웹-메인페이지</title>
    <!-- 아이폰에서 숫자가 전화번호로 인식해서 어둡게 나오는것을 방지 -->
    <meta name="format-detection" content="telephone=no">

    <!-- 파비콘 삽입하기 -->
    <link href="./images/E2wVnYBd.ico" type="image/x-icon" rel="shortcut icon">

    <!-- 1. 초기화 -->
    <link href="./css/reset.css" rel="stylesheet" type="text/css">

    <!-- 2. 기본서식 base 글자모양, 글자크기, 색상, 링크 -->
    <link href="./css/base.css" rel="stylesheet" type="text/css">

    <!-- 3. 공통서식 header, footer 공통서식 -->
    <link href="./css/common.css" rel="stylesheet" type="text/css">
    
    <!-- 4. mobile해상도에 맞는 서식 -->
    <link href="./css/mobile.css" rel="stylesheet" type="text/css">
  
    <!-- 5. tablet해상도에 맞는 서식 -->
    <link href="./css/tablet.css" rel="stylesheet" type="text/css">

    <!-- 6. pc해상도에 맞는 서식 -->
    <link href="./css/pc.css" rel="stylesheet" type="text/css">

    <!-- 7. 스와이퍼 슬라이드 서식 -->
    <link href="./css/swiper.css" rel="stylesheet" type="text/css">

    <!-- 폰트어썸 아이콘폰트 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<body>
  <form name="search" method="post" action="search.php">
    <input type="checkbox" id="toggle">

<!-- 헤더영역 시작 -->
	<header>
	<div class="h_top">
	<!-- 상단로고 -->
	<h1>
			<a href="index.html" title="메인페이지로 바로가기">
			<img src="./images/logo2.png" alt="상단로고">
			</a>
	</h1>

	<!-- 로그인, 회원가입 -->
	<nav class="lnb">
			<ul>
			<li><a href="login.html" title="로그인">로그인</a></li>
			<li><a href="join.html" title="회원가입">회원가입</a></li>
			<li><a href="order.html" title="주문조회">주문조회</a></li>
			<li><a href="cart.html" title="장바구니">장바구니</a></li>
			</ul>
	</nav>

	<!-- 검색폼 -->
	<fieldset>
			<input type="search" id="search" placeholder="이달의 특가 5%" maxlength="50">
			<label for="search" class="fas fa-search"><span>검색버튼</span></label>
	</fieldset>
	</div>
	
	<label for="toggle" class="total_btn">
	<!-- <img src='./images/w_fold_btn.png' alt="전체메뉴"> -->
	<i class="fas fa-bars"></i>
	</label>

	<a href="cart.html" title="장바구니페이지 바로가기" class="cart_btn">
	<i class="fa fa-shopping-cart"></i>
	</a>

	<!-- 메인 내비게이션 2단 메뉴 -->
	<div class="h_bottom">
	<nav class="gnb">
			<label for="toggle" class="c_btn"><i class="fas fa-times"></i></label>
			<ul>
			<li><a href="brand.html" title="브랜드">브랜드<i class='fas fa-angle-down'></i></a>
					<ul class="sub">
					<li><a href="#" title="가장 맛있는 시간 30일">가장맛있는시간 30일</a></li>
					<li><a href="#" title="더리얼">더리얼</a></li>
					<li><a href="#" title="밥이보약">밥이보약</a></li>
					</ul>
			</li>
			<li><a href="delibery.html" title="정기배송">정기배송<i class='fas fa-angle-down'></i></a>
					<ul class="sub">
					<li><a href="#" title="DOG">DOG</a></li>
					<li><a href="#" title="CAT">CAT</a></li>
					</ul>
			</li>
			<li><a href="dog.html" title="DOG">DOG<i class='fas fa-angle-down'></i></a>
					<ul class="sub">
					<li><a href="#" title="오늘생산배송">오늘생산배송</a></li>
					<li><a href="#" title="브랜드별">브랜드별</a></li>
					<li><a href="#" title="연령별">연령별</a></li>
					<li><a href="#" title="유형별">유형별</a></li>
					<li><a href="#" title="샘플신청">샘플신청</a></li>
					<li><a href="#" title="이벤트">이벤트</a></li>
					<li><a href="#" title="상품후기">상품후기</a></li>
					</ul>
			</li>
			<li><a href="cat.html" title="CAT">CAT<i class='fas fa-angle-down'></i></a>
					<ul class="sub">
					<li><a href="#" title="오늘생산배송">오늘생산배송</a></li>
					<li><a href="#" title="브랜드별">브랜드별</a></li>
					<li><a href="#" title="연령별">연령별</a></li>
					<li><a href="#" title="유형별">유형별</a></li>
					<li><a href="#" title="샘플신청">샘플신청</a></li>
					<li><a href="#" title="이벤트">이벤트</a></li>
					<li><a href="#" title="상품후기">상품후기</a></li>
					</ul>
			</li>
			<li><a href="member.html" title="멤버쉽">멤버쉽<i class='fas fa-angle-down'></i></a>
					<ul class="sub">
					<li><a href="#" title="멤버쉽">멤버쉽</a></li>
					<li><a href="#" title="이벤트">이벤트</a></li>
					<li><a href="#" title="골드멤버존">골드멤버존</a></li>
					</ul>
			</li>
			<li><a href="story.html" title="우리 이야기">우리 이야기<i class='fas fa-angle-down'></i></a>
					<ul class="sub">
					<li><a href="#" title="우리이야기">우리이야기</a></li>
					<li><a href="#" title="우리의약속">우리의약속</a></li>
					<li><a href="#" title="100% 휴먼그레이드">휴먼그레이드</a></li>
					<li><a href="#" title="이노베이션">이노베이션</a></li>
					<li><a href="#" title="제조시설">제조시설</a></li>
					<li><a href="#" title="반려견 동반">반려견 동반</a></li>
					</ul>
			</li>
			<li><a href="tour.html" title="투어신청">투어신청<i class='fas fa-angle-down'></i></a></li>
			</ul>
	</nav>
	</div>
	</header>