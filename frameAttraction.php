<!DOCTYPE html>
<html lang="ru">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Дизайнерский пазлы">
  <meta name="viewport" content="width = device-width, initial-scale = 1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/header_footer.css">
  <link href="fonts/stylesheet.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/frameWhy.css">
  <link rel="stylesheet" href="css/popup_calc.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/chosen.css">
</head>

<body>
  <div class="col-md-4 col-xs-12 b-popup" id="popup1" style="z-index:66;">
    <div й class="pricepop lux b-popup-content">

      <div class="contentpopap" style="padding-bottom: 1px;">
        <div class="popup_top">
          <div class="popup_h">
            <p>Предварительная стоимость
              привлечение клиента в вашей нише</p>
          </div>
          <div class="close_popup">
            <a href="javascript:PopUpHide();"><img src="image/close_popup.png" alt="" class="close_img"></a>
          </div>
        </div>
        <div class="calc">
          <p class="p_calc" id="popupPrice">57 R</p>
        </div>
        <div class="button">
          <a href="javascript:PopUpShow2(); javascript:PopUpHide();">Получить клиентов</a>
        </div>
      </div>

    </div>
  </div>
  <div class="col-md-4 col-xs-12 b-popup" id="popup2" style="z-index:66;">
    <div й class="pricepop lux b-popup-content">

      <div class="contentpopap" style="padding-bottom: 1px;">
        <div class="popup_top">
          <div class="popup_h">
            <p>Свяжитесь с нами</p>
          </div>
          <div class="close_popup">
            <a href="javascript:PopUpHide2();"><img src="image/close_popup.png" alt="" class="close_img"></a>
          </div>
        </div>
      </div>
      <form class="popupform" action="main.php" method="post">
        <div class="popup_input_top">
          <input id="subs_email" type="text" name="f[name]" class="form-control" placeholder="Ваше имя:" required>
          <input id="subs_email" type="text" name="f[e-mail]" class="form-control" placeholder="E-mail:" required>
        </div>
        <div class="popup_input_bottom">
          <input id="subs_email" type="textarea" name="f[message]" class="form-control" placeholder="Расскажите о вашем проекте:" required>
        </div>
        <input type="checkbox" id="quiz_messanger" name="f[quiz_messanger]" value=""><label for="quiz_messanger">Напишите мне в мессенджер</label>
        <br>
        <input type="checkbox" id="checkbox2" value="" required checked><label for="checkbox2">Я согласен с <a href="policy.html">политикой конфиденциальности</a></label>
        <input type="hidden" name="utmCampaign" value="<?php echo $_GET['utm_campaign'] ?>">
        <input type="hidden" name="utmSiteid" value="<?php echo $_GET['utm_siteid'] ?>">
        <div class="popup_menu">

          <input id="subs_btn" class="btn btn-danger" type="submit" name="" value="Отправить" style="margin-bottom:0px;">
        </div>
      </form>
    </div>
  </div>
  <script>
    $(document).ready(function() {
      PopUpHide();
    });

    function PopUpShow() {
      $("#popup1").css('display', 'flex');
    }

    function PopUpHide() {
      $("#popup1").hide();
    }

    function PopUpShow2() {
      $("#popup2").css('display', 'flex');
    }

    function PopUpHide2() {
      $("#popup2").hide();
    }
  </script>

  <header>
    <img src="image/header.png" alt="" class="header_fon">

    <div class="logo">
      <img src="image/Logo.png" alt="">
    </div>
    <content>


      <input id="hamburger" class="hamburger" type="checkbox" />
      <label class="hamburger" for="hamburger">
        <i></i>

      </label>
      <section class="drawer-list">
        <ul>
          <li><a href="index.php">SMM</a></li>
          <li><a href="frameKeys.php">Кейсы</a></li>
          <li><a href="frameWhy.php">Почему мы</a></li>
          <li><a href="frameAttraction.php" style="font-weight: bold; pointer-events: none; cursor: default;">Привлечение пользователей</a></li>

        </ul>
      </section>
    </content>
    <svg style="position: absolute; width: 0; height: 0;" width="0" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <defs>
        <symbol id="icon-chrome" viewBox="0 0 32 32">
          <title>chrome</title>
          <path class="path1"
            d="M8.071 13.954l-4.579-7.931c2.932-3.671 7.445-6.023 12.508-6.023 5.857 0 10.978 3.148 13.767 7.844h-13.055c-0.235-0.020-0.472-0.031-0.711-0.031-3.809 0-7.018 2.614-7.929 6.142zM21.728 10.156h9.171c0.711 1.81 1.101 3.781 1.101 5.844 0 8.776-7.066 15.9-15.818 15.998l6.544-11.334c0.921-1.324 1.462-2.932 1.462-4.664 0-2.287-0.943-4.357-2.459-5.844zM10.188 16c0-3.205 2.607-5.813 5.813-5.813s5.813 2.607 5.813 5.813c0 3.205-2.608 5.813-5.813 5.813s-5.813-2.608-5.813-5.813zM18.193 23.889l-4.581 7.934c-7.704-1.153-13.613-7.797-13.613-15.822 0-2.851 0.746-5.526 2.053-7.845l6.532 11.314c1.308 2.785 4.14 4.718 7.415 4.718 0.759 0 1.495-0.104 2.193-0.299z">
          </path>
        </symbol>
        <symbol id="icon-firefox" viewBox="0 0 32 32">
          <title>firefox</title>
          <path class="path1"
            d="M31.954 10.442l-0.371 2.377c0 0-0.53-4.402-1.179-6.047-0.995-2.521-1.438-2.501-1.441-2.498 0.667 1.694 0.546 2.604 0.546 2.604s-1.181-3.219-4.303-4.243c-3.459-1.134-5.33-0.824-5.547-0.765-0.033-0-0.064-0-0.095-0 0.026 0.002 0.050 0.005 0.076 0.007-0.001 0.001-0.003 0.001-0.003 0.002 0.014 0.017 3.822 0.666 4.497 1.594 0 0-1.617 0-3.227 0.464-0.073 0.021 5.923 0.749 7.148 6.74 0 0-0.657-1.371-1.47-1.604 0.535 1.626 0.397 4.712-0.112 6.245-0.066 0.197-0.133-0.853-1.135-1.305 0.321 2.301-0.019 5.952-1.616 6.957-0.124 0.078 1.001-3.603 0.226-2.18-4.46 6.838-9.731 3.155-12.101 1.535 1.215 0.264 3.52-0.041 4.541-0.8 0.001-0.001 0.002-0.002 0.004-0.003 1.108-0.758 1.765-1.311 2.354-1.18s0.982-0.46 0.524-0.985c-0.459-0.526-1.572-1.249-3.079-0.855-1.063 0.278-2.379 1.454-4.389 0.264-1.543-0.914-1.688-1.673-1.702-2.199 0.038-0.186 0.086-0.361 0.143-0.52 0.178-0.496 0.716-0.646 1.015-0.764 0.508 0.087 0.946 0.246 1.405 0.481 0.006-0.153 0.008-0.356-0.001-0.586 0.044-0.088 0.017-0.352-0.054-0.674-0.041-0.322-0.107-0.655-0.211-0.959 0-0 0.001-0 0.001-0 0.002-0.001 0.003-0.001 0.005-0.002s0.005-0.004 0.007-0.006c0-0.001 0.001-0.001 0.001-0.002 0.003-0.004 0.005-0.008 0.006-0.015 0.032-0.144 0.376-0.423 0.804-0.722 0.383-0.268 0.834-0.553 1.19-0.774 0.314-0.195 0.554-0.34 0.605-0.378 0.019-0.015 0.042-0.032 0.068-0.051 0.005-0.004 0.009-0.007 0.014-0.011 0.003-0.002 0.006-0.005 0.009-0.007 0.169-0.135 0.421-0.389 0.474-0.924 0-0.001 0-0.002 0-0.004 0.002-0.016 0.003-0.032 0.004-0.048 0.001-0.011 0.002-0.023 0.002-0.034 0-0.009 0.001-0.018 0.001-0.027 0.001-0.021 0.002-0.043 0.002-0.065 0-0.001 0-0.002 0-0.004 0.001-0.052-0-0.106-0.003-0.163-0.002-0.032-0.004-0.060-0.009-0.086-0-0.001-0.001-0.003-0.001-0.004-0.001-0.003-0.001-0.005-0.002-0.008-0.001-0.005-0.002-0.009-0.004-0.013-0-0.001-0-0.001-0.001-0.001-0.002-0.005-0.004-0.010-0.005-0.014-0-0-0-0-0-0.001-0.055-0.128-0.26-0.177-1.108-0.191-0.001-0-0.002-0-0.002-0v0c-0.346-0.006-0.798-0.006-1.391-0.004-1.039 0.004-1.613-1.016-1.797-1.41 0.251-1.389 0.977-2.379 2.17-3.051 0.023-0.013 0.018-0.023-0.009-0.031 0.233-0.141-2.82-0.004-4.225 1.782-1.247-0.31-2.333-0.289-3.269-0.069-0.18-0.005-0.404-0.027-0.67-0.083-0.623-0.564-1.514-1.606-1.562-2.85 0 0-0.003 0.002-0.008 0.006-0.001-0.012-0.002-0.024-0.002-0.036 0 0-1.897 1.458-1.613 5.434-0.001 0.064-0.002 0.125-0.004 0.184-0.514 0.696-0.768 1.282-0.787 1.411-0.455 0.926-0.917 2.32-1.292 4.437 0 0 0.263-0.833 0.79-1.777-0.388 1.188-0.693 3.036-0.514 5.808 0 0 0.047-0.615 0.215-1.5 0.131 1.719 0.704 3.841 2.152 6.337 2.78 4.791 7.052 7.211 11.775 7.582 0.839 0.069 1.689 0.071 2.544 0.006 0.079-0.006 0.157-0.011 0.236-0.018 0.968-0.068 1.942-0.214 2.914-0.449 13.287-3.212 11.842-19.256 11.842-19.256z">
          </path>
        </symbol>
        <symbol id="icon-IE" viewBox="0 0 32 32">
          <title>IE</title>
          <path class="path1"
            d="M22.944 19.651h7.377c0.057-0.512 0.080-1.034 0.080-1.569 0-2.507-0.673-4.858-1.848-6.883 1.215-3.228 1.172-5.968-0.455-7.606-1.547-1.54-5.697-1.29-10.388 0.787-0.347-0.026-0.697-0.040-1.051-0.040-6.439 0-11.841 4.431-13.335 10.402 2.020-2.586 4.145-4.461 6.984-5.826-0.258 0.242-1.764 1.739-2.018 1.993-7.486 7.484-9.847 17.26-7.306 19.8 1.931 1.93 5.43 1.604 9.449-0.364 1.869 0.952 3.984 1.488 6.226 1.488 6.035 0 11.15-3.885 13.003-9.295h-7.433c-1.023 1.887-3.023 3.171-5.319 3.171s-4.296-1.284-5.319-3.171c-0.455-0.852-0.716-1.83-0.716-2.864v-0.023h12.071zM10.884 16.025c0.171-3.035 2.694-5.456 5.774-5.456s5.604 2.421 5.774 5.456h-11.548zM28.030 5.119c1.048 1.059 1.021 3.007 0.125 5.438-1.535-2.341-3.766-4.186-6.4-5.239 2.816-1.207 5.106-1.367 6.274-0.199zM2.921 30.227c-1.337-1.337-0.934-4.144 0.788-7.526 1.072 3.008 3.161 5.534 5.854 7.161-2.982 1.354-5.423 1.584-6.643 0.365z">
          </path>
        </symbol>
        <symbol id="icon-edge" viewBox="0 0 32 32">
          <title>edge</title>
          <path class="path1"
            d="M0.481 14.206c0.938-7.4 5.987-14.113 15.037-14.206 5.463 0.106 9.956 2.581 12.631 7.3 1.344 2.462 1.762 5.050 1.85 7.906v3.356h-20.081c0.094 8.281 12.188 8 17.394 4.35v6.744c-3.050 1.831-9.969 3.469-15.325 1.363-4.563-1.712-7.813-6.488-7.794-11.081-0.15-5.956 2.962-9.9 7.794-12.144-1.025 1.269-1.806 2.669-2.213 5.094h11.338c0 0 0.663-6.775-6.419-6.775-6.675 0.231-11.488 4.112-14.213 8.094v0z">
          </path>
        </symbol>
        <symbol id="icon-safari" viewBox="0 0 32 32">
          <title>safari</title>
          <path class="path1"
            d="M16 0c-8.838 0-16 7.162-16 16s7.162 16 16 16 16-7.163 16-16-7.163-16-16-16zM29.95 14.775l-0.031-0.331c0.006 0.113 0.019 0.219 0.031 0.331zM27.762 8.4l-0.225-0.338c0.075 0.113 0.15 0.225 0.225 0.338zM26.894 7.206l-0.137-0.169c0.050 0.056 0.094 0.112 0.137 0.169zM24.956 5.237l-0.169-0.138c0.063 0.050 0.113 0.094 0.169 0.138zM23.938 4.463l-0.337-0.225c0.113 0.075 0.225 0.15 0.337 0.225zM17.556 2.087l-0.337-0.031c0.113 0.006 0.225 0.019 0.337 0.031zM14.775 2.050l-0.338 0.031c0.113-0.006 0.225-0.019 0.338-0.031zM8.4 4.237l-0.338 0.225c0.113-0.075 0.225-0.15 0.338-0.225zM7.206 5.106l-0.162 0.131c0.056-0.044 0.106-0.088 0.162-0.131zM5.237 7.044l-0.138 0.169c0.050-0.056 0.094-0.112 0.138-0.169zM4.463 8.063l-0.225 0.338c0.075-0.113 0.15-0.225 0.225-0.338zM2.087 14.444l-0.031 0.338c0.006-0.113 0.019-0.225 0.031-0.338zM2.050 17.225l0.031 0.337c-0.006-0.113-0.019-0.225-0.031-0.337zM4.237 23.594l0.225 0.337c-0.075-0.106-0.15-0.219-0.225-0.337zM4.5 23.988l2.494-1.669-0.275-0.419-2.494 1.669c-1.131-1.756-1.875-3.775-2.125-5.95l1.494-0.15-0.050-0.5-1.494 0.15c-0.025-0.288-0.038-0.581-0.044-0.875h3v-0.5h-3c0.006-0.294 0.019-0.581 0.044-0.875l1.494 0.144 0.050-0.5-1.494-0.144c0.25-2.175 1-4.194 2.131-5.95l2.494 1.669 0.275-0.419-2.5-1.656c0.169-0.237 0.338-0.475 0.519-0.7l1.156 0.95 0.319-0.388-1.156-0.95c0.188-0.225 0.388-0.438 0.588-0.65l2.119 2.119 0.356-0.356-2.119-2.119c0.213-0.2 0.425-0.4 0.644-0.588l0.95 1.162 0.387-0.319-0.95-1.156c0.231-0.181 0.463-0.356 0.7-0.525l1.669 2.494 0.419-0.275-1.669-2.494c1.756-1.131 3.775-1.875 5.95-2.125l0.15 1.494 0.5-0.050-0.15-1.494c0.287-0.025 0.581-0.038 0.875-0.044v3h0.5v-3c0.294 0.006 0.581 0.019 0.875 0.044l-0.144 1.494 0.5 0.050 0.144-1.494c2.175 0.25 4.194 1 5.95 2.131l-1.669 2.494 0.419 0.275 1.669-2.494c0.238 0.169 0.475 0.338 0.7 0.519l-0.95 1.156 0.387 0.319 0.95-1.156c0.225 0.188 0.438 0.388 0.65 0.588l-0.8 0.781-10.938 7.294-7.294 10.937-0.781 0.781c-0.2-0.212-0.4-0.425-0.588-0.644l1.156-0.95-0.319-0.387-1.156 0.95c-0.181-0.225-0.35-0.462-0.519-0.7zM5.237 24.956c-0.044-0.056-0.088-0.106-0.131-0.163l0.131 0.163zM7.044 26.762l0.162 0.131c-0.056-0.044-0.106-0.087-0.162-0.131zM8.063 27.531l0.338 0.225c-0.113-0.069-0.225-0.144-0.338-0.225zM14.444 29.913l0.338 0.031c-0.113-0.006-0.225-0.019-0.338-0.031zM17.225 29.95l0.331-0.031c-0.113 0.006-0.219 0.019-0.331 0.031zM23.6 27.762l0.337-0.225c-0.113 0.075-0.225 0.15-0.337 0.225zM24.794 26.894l0.169-0.137c-0.056 0.050-0.113 0.094-0.169 0.137zM25.887 25.913l0.025-0.025c-0.006 0.006-0.019 0.019-0.025 0.025zM26.762 24.956l0.137-0.169c-0.050 0.056-0.094 0.113-0.137 0.169zM26.981 24.688l-1.156-0.95-0.319 0.387 1.156 0.95c-0.188 0.225-0.387 0.438-0.587 0.65l-2.119-2.119-0.356 0.356 2.119 2.119c-0.212 0.2-0.425 0.4-0.644 0.587l-0.95-1.163-0.387 0.319 0.95 1.156c-0.231 0.181-0.462 0.356-0.7 0.525l-1.669-2.494-0.419 0.275 1.669 2.494c-1.756 1.131-3.775 1.875-5.95 2.125l-0.15-1.494-0.5 0.050 0.15 1.494c-0.288 0.025-0.581 0.038-0.875 0.044v-3h-0.5v3c-0.294-0.006-0.581-0.019-0.875-0.044l0.144-1.494-0.5-0.050-0.144 1.494c-2.175-0.25-4.194-1-5.95-2.131l1.669-2.494-0.419-0.275-1.656 2.494c-0.237-0.169-0.475-0.337-0.7-0.519l0.95-1.156-0.388-0.319-0.95 1.156c-0.225-0.188-0.438-0.387-0.65-0.587l0.787-0.781 10.937-7.294 7.294-10.938 0.781-0.781c0.2 0.213 0.4 0.425 0.587 0.644l-1.156 0.95 0.319 0.387 1.156-0.95c0.181 0.231 0.356 0.463 0.525 0.7l-2.494 1.669 0.275 0.419 2.494-1.669c1.131 1.756 1.875 3.775 2.125 5.95l-1.494 0.15 0.050 0.5 1.494-0.15c0.025 0.287 0.038 0.581 0.044 0.875h-3v0.5h3c-0.006 0.294-0.019 0.581-0.044 0.875l-1.494-0.144-0.050 0.5 1.494 0.144c-0.25 2.175-1 4.194-2.131 5.95l-2.494-1.669-0.275 0.419 2.494 1.669c-0.163 0.225-0.337 0.456-0.519 0.688zM29.95 17.219c-0.012 0.113-0.019 0.225-0.031 0.337l0.031-0.337zM27.762 23.6c-0.075 0.113-0.15 0.225-0.225 0.337l0.225-0.337z">
          </path>
          <path class="path2" d="M13.517 2.221l0.585 2.942-0.49 0.098-0.585-2.942 0.49-0.098z"></path>
          <path class="path3" d="M18.489 29.78l-0.585-2.942 0.49-0.098 0.585 2.942-0.49 0.098z"></path>
          <path class="path4" d="M12.176 2.528l0.436 1.435-0.478 0.145-0.436-1.435 0.478-0.145z"></path>
          <path class="path5" d="M19.826 29.465l-0.436-1.435 0.478-0.145 0.436 1.435-0.478 0.145z"></path>
          <path class="path6" d="M10.875 2.972l1.148 2.772-0.462 0.191-1.148-2.772 0.462-0.191z"></path>
          <path class="path7" d="M21.129 29.030l-1.148-2.772 0.462-0.191 1.148 2.772-0.462 0.191z"></path>
          <path class="path8" d="M9.176 3.771l0.441-0.236 0.707 1.323-0.441 0.236-0.707-1.323z"></path>
          <path class="path9" d="M22.816 28.228l-0.441 0.236-0.707-1.323 0.441-0.236 0.707 1.323z"></path>
          <path class="path10" d="M3.769 9.182l1.323 0.707-0.236 0.441-1.323-0.707 0.236-0.441z"></path>
          <path class="path11" d="M28.226 22.819l-1.323-0.707 0.236-0.441 1.323 0.707-0.236 0.441z"></path>
          <path class="path12" d="M5.744 12.019l-2.772-1.148 0.191-0.462 2.772 1.148-0.191 0.462z"></path>
          <path class="path13" d="M26.26 19.978l2.772 1.148-0.191 0.462-2.772-1.148 0.191-0.462z"></path>
          <path class="path14" d="M2.673 11.7l1.436 0.435-0.145 0.479-1.436-0.435 0.145-0.479z"></path>
          <path class="path15" d="M29.322 20.302l-1.436-0.435 0.145-0.479 1.436 0.435-0.145 0.479z"></path>
          <path class="path16" d="M2.315 13.024l2.942 0.585-0.098 0.49-2.942-0.585 0.098-0.49z"></path>
          <path class="path17" d="M29.679 18.976l-2.942-0.585 0.098-0.49 2.942 0.585-0.098 0.49z"></path>
          <path class="path18" d="M2.218 18.486l2.942-0.585 0.098 0.49-2.942 0.585-0.098-0.49z"></path>
          <path class="path19" d="M29.776 13.513l-2.942 0.585-0.098-0.49 2.942-0.585 0.098 0.49z"></path>
          <path class="path20" d="M2.53 19.829l1.435-0.436 0.145 0.478-1.435 0.436-0.145-0.478z"></path>
          <path class="path21" d="M29.468 12.178l-1.435 0.436-0.145-0.478 1.435-0.436 0.145 0.478z"></path>
          <path class="path22" d="M3.161 21.591l-0.191-0.462 2.772-1.148 0.191 0.462-2.772 1.148z"></path>
          <path class="path23" d="M28.837 10.413l0.191 0.462-2.772 1.148-0.191-0.462 2.772-1.148z"></path>
          <path class="path24" d="M3.776 22.821l-0.236-0.441 1.323-0.707 0.236 0.441-1.323 0.707z"></path>
          <path class="path25" d="M28.233 9.181l0.236 0.441-1.323 0.707-0.236-0.441 1.323-0.707z"></path>
          <path class="path26" d="M9.621 28.464l-0.441-0.236 0.707-1.323 0.441 0.236-0.707 1.323z"></path>
          <path class="path27" d="M22.377 3.534l0.441 0.236-0.707 1.323-0.441-0.236 0.707-1.323z"></path>
          <path class="path28" d="M10.415 28.837l1.148-2.772 0.462 0.191-1.148 2.772-0.462-0.191z"></path>
          <path class="path29" d="M21.59 3.16l-1.148 2.772-0.462-0.191 1.148-2.772 0.462 0.191z"></path>
          <path class="path30" d="M12.176 29.47l-0.478-0.145 0.435-1.435 0.478 0.145-0.435 1.435z"></path>
          <path class="path31" d="M19.823 2.528l0.479 0.145-0.435 1.436-0.479-0.145 0.435-1.436z"></path>
          <path class="path32" d="M13.515 29.776l-0.49-0.098 0.585-2.942 0.49 0.098-0.585 2.942z"></path>
          <path class="path33" d="M18.485 2.218l0.49 0.098-0.585 2.942-0.49-0.098 0.585-2.942z"></path>
        </symbol>
        <symbol id="icon-opera" viewBox="0 0 32 32">
          <title>opera</title>
          <path class="path1" d="M32 16v0 0c0 4.738-2.063 9-5.337 11.925-4.106 2-7.931 0.6-9.194-0.275 4.031-0.881 7.075-5.756 7.075-11.65s-3.044-10.769-7.075-11.656c1.269-0.875 5.094-2.275 9.194-0.275 3.275 2.931 5.337 7.194 5.337 11.931v0 0z">
          </path>
          <path class="path2"
            d="M10.731 6.981c-1.769 2.087-2.912 5.175-2.987 8.644 0 0.006 0 0.744 0 0.756 0.075 3.462 1.225 6.55 2.994 8.637 2.294 2.981 5.706 4.869 9.519 4.869 2.344 0 4.538-0.712 6.413-1.956-2.837 2.531-6.575 4.069-10.669 4.069-0.256 0-0.512-0.006-0.762-0.019-8.481-0.4-15.238-7.4-15.238-15.981 0-8.838 7.162-16 16-16 0.019 0 0.038 0 0.063 0 4.075 0.013 7.787 1.55 10.606 4.075-1.875-1.244-4.069-1.962-6.413-1.962-3.813 0-7.225 1.887-9.525 4.869z">
          </path>
        </symbol>

        <symbol id="icon-android" viewBox="0 0 32 32">
          <title>android</title>
          <path class="path1"
            d="M28 12c-1.1 0-2 0.9-2 2v8c0 1.1 0.9 2 2 2s2-0.9 2-2v-8c0-1.1-0.9-2-2-2zM4 12c-1.1 0-2 0.9-2 2v8c0 1.1 0.9 2 2 2s2-0.9 2-2v-8c0-1.1-0.9-2-2-2zM7 23c0 1.657 1.343 3 3 3v0 4c0 1.1 0.9 2 2 2s2-0.9 2-2v-4h4v4c0 1.1 0.9 2 2 2s2-0.9 2-2v-4c1.657 0 3-1.343 3-3v-11h-18v11z">
          </path>
          <path class="path2"
            d="M24.944 10c-0.304-2.746-1.844-5.119-4.051-6.551l1.001-2.001c0.247-0.494 0.047-1.095-0.447-1.342s-1.095-0.047-1.342 0.447l-1.004 2.009-0.261-0.104c-0.893-0.297-1.848-0.458-2.84-0.458s-1.947 0.161-2.84 0.458l-0.261 0.104-1.004-2.009c-0.247-0.494-0.848-0.694-1.342-0.447s-0.694 0.848-0.447 1.342l1.001 2.001c-2.207 1.433-3.747 3.805-4.051 6.551v1h17.944v-1h-0.056zM13 8c-0.552 0-1-0.448-1-1s0.447-0.999 0.998-1c0.001 0 0.002 0 0.003 0s0.001-0 0.002-0c0.551 0.001 0.998 0.448 0.998 1s-0.448 1-1 1zM19 8c-0.552 0-1-0.448-1-1s0.446-0.999 0.998-1c0 0 0.001 0 0.002 0s0.002-0 0.003-0c0.551 0.001 0.998 0.448 0.998 1s-0.448 1-1 1z">
          </path>
        </symbol>
        <symbol id="icon-appleinc" viewBox="0 0 32 32">
          <title>appleinc</title>
          <path class="path1"
            d="M24.734 17.003c-0.040-4.053 3.305-5.996 3.454-6.093-1.88-2.751-4.808-3.127-5.851-3.171-2.492-0.252-4.862 1.467-6.127 1.467-1.261 0-3.213-1.43-5.28-1.392-2.716 0.040-5.221 1.579-6.619 4.012-2.822 4.897-0.723 12.151 2.028 16.123 1.344 1.944 2.947 4.127 5.051 4.049 2.026-0.081 2.793-1.311 5.242-1.311s3.138 1.311 5.283 1.271c2.18-0.041 3.562-1.981 4.897-3.931 1.543-2.255 2.179-4.439 2.216-4.551-0.048-0.022-4.252-1.632-4.294-6.473zM20.705 5.11c1.117-1.355 1.871-3.235 1.665-5.11-1.609 0.066-3.559 1.072-4.713 2.423-1.036 1.199-1.942 3.113-1.699 4.951 1.796 0.14 3.629-0.913 4.747-2.264z">
          </path>
        </symbol>
      </defs>
    </svg>
    <nav>
      <a href="index.php" style="font-weight:normal">SMM</a>
      <a href="frameAttraction.php" style="font-weight:bold;pointer-events: none; cursor: default;">Привлечение пользователей</a>
      <a href="frameKeys.php">Кейсы</a>
      <a href="frameWhy.php">Почему мы</a>
    </nav>
  </header>
  <div class="content">
    <div class="left_block">
      <p>Калькулятор</p>
      <p>Расчитайте себе свою доходность</p>
    </div>
    <div class="right_form">
      <form action="">
        <p>Рекламный бюджет, ₽</p>
        <div class="slidecontainer">
          <output class="bubble"></output>
          <input type="range" min="100" max="100000" value="50000" class="slider" id="myRange" step="10">
        </div>

        <div class="select-box">
          <div class="options-container">
            <div class="option">
              <input type="radio" class="radio" id="automobiles" name="category" />
              <label for="automobiles">Детские праздники</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="film" name="category" />
              <label for="film">Женские праздники</label>
            </div>

            <div class="option">
              <input type="radio" class="radio" id="science" name="category" />
              <label for="science">Мужские праздники</label>
            </div>

            <div class="option">
              <input type="radio" class="radio" id="art" name="category" />
              <label for="art">Романтика</label>
            </div>

            <div class="option">
              <input type="radio" class="radio" id="music" name="category" />
              <label for="music">Что-то там ещё</label>
            </div>

            <div class="option">
              <input type="radio" class="radio" id="travel" name="category" />
              <label for="travel">И ещё</label>
            </div>

            <div class="option">
              <input type="radio" class="radio" id="sports" name="category" />
              <label for="sports">Селектор</label>
            </div>

            <div class="option">
              <input type="radio" class="radio" id="news" name="category" />
              <label for="news">Михаил</label>
            </div>

            <div class="option">
              <input type="radio" class="radio" id="tutorials" name="category" />
              <label for="tutorials">Как тебе?</label>
            </div>
          </div>



          <div class="search-box">
            <input type="text" placeholder="Найдите свою категорию..." class="search_input" />
            <div class="selected" id="myInput">
              Выберите вашу нишу
            </div>
          </div>
        </div>
        <p id="test"></p>
        <script type="text/javascript">
          function test() {
            var a = document.getElementById('myInput').innerText;
            var range = document.getElementById('myRange').value;
            var month = document.getElementById('range_month').value;
            var b = range / month;
            if (a === "Михаил") {
              b = b / 2;
              document.getElementById('popupPrice').innerText = Math.round(b) + " ₽";
            } else if (a === "Детские праздники") {
              b = b / 10;
              document.getElementById('popupPrice').innerText = Math.round(b) + " ₽";
            } else {
              document.getElementById('popupPrice').innerText = Math.round(b) + " ₽";
            }
          }
        </script>
        <p class="range_p">Срок сотрудничества</p>
        <div class="__range __range-step">
          <input value="3" type="range" max="6" min="1" step="1" list="ticks1" id="range_month">
          <datalist id="ticks1">
            <option value="1">1 мес</option>
            <option value="2">2 мес</option>
            <option value="3">3 мес</option>
            <option value="4">4 мес</option>
            <option value="5">5 мес</option>
            <option value="6">6 мес</option>

          </datalist>
        </div>

      </form>
      <div class="button">
        <a href="javascript:PopUpShow();javascript:test()">Рассчитать</a>
      </div>
    </div>

    <script>
      const allRanges = document.querySelectorAll(".slidecontainer");
      allRanges.forEach(wrap => {
        const range = wrap.querySelector(".slider");
        const bubble = wrap.querySelector(".bubble");

        range.addEventListener("input", () => {
          setBubble(range, bubble);
        });
        setBubble(range, bubble);
      });

      function setBubble(range, bubble) {
        const val = range.value;
        const min = range.min ? range.min : 100;
        const max = range.max ? range.max : 100000;
        const newVal = Number(((val - min) * 100) / (max - min));
        bubble.innerHTML = val;

        // Sorta magic numbers based on size of the native UI thumb
        bubble.style.left = `calc(${newVal}% + (${11 - newVal * 0.22}px))`;
      }

      document.querySelectorAll(".__range-step").forEach(function(ctrl) {
        var el = ctrl.querySelector('input');
        var output = ctrl.querySelector('output');
        var newPoint, newPlace, offset;
        el.oninput = function() {
          // colorize step options
          ctrl.querySelectorAll("option").forEach(function(opt) {
            if (opt.value <= el.valueAsNumber)
              opt.style.backgroundColor = '#AB8DF8';
            else
              opt.style.backgroundColor = '#aaa';
          });
          // colorize before and after
          var valPercent = (el.valueAsNumber - parseInt(el.min)) / (parseInt(el.max) - parseInt(el.min));
          var style = 'background-image: -webkit-gradient(linear, 0% 0%, 100% 0%, color-stop(' +
            valPercent + ', #AB8DF8), color-stop(' +
            valPercent + ', #aaa));';
          el.style = style;

          // Popup
          if ((' ' + ctrl.className + ' ').indexOf(' ' + '__range-step-popup' + ' ') > -1) {
            var selectedOpt = ctrl.querySelector('option[value="' + el.value + '"]');
            output.innerText = selectedOpt.text;
            output.style.left = "50%";
            output.style.left = ((selectedOpt.offsetLeft + selectedOpt.offsetWidth / 2) - output.offsetWidth / 2) + 'px';
          }
        };
        el.oninput();
      });

      window.onresize = function() {
        document.querySelectorAll(".__range").forEach(function(ctrl) {
          var el = ctrl.querySelector('input');
          el.oninput();
        });
      };
    </script>
    <img src="image/footer_shadow.jpg" alt="" class="footerfon">

  </div>
  <footer>
    <nav>
      <a href="">Telegram</a>
      <a href="">Facebook</a>
      <a href="">LinkedIn</a>
    </nav>

  </footer>
  </div>
  <script src="js/main.js">

  </script>
</body>

</html>
