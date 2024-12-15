
<?php
//$setting= \App\Models\Setting::first();
//if (!$setting) {
//            $setting = new Setting(); // Create a default setting if none exists
//        }
?>
<style>

@import url("https://fonts.googleapis.com/css2?family=Italiana&family=Prompt:wght@300;400;500;600;700;800;900&display=swap");
:root {
    --body-font: 'Prompt', sans-serif;
    --heading-font: 'Italiana', serif;        --primary-color: #000000;  
  

    --secondary-color: #000000;
    --text-color: #74787C;
    --border-color: #3D3D3D;
    --border-gray: #DEDEDE;
    --border-dark: #242424;
    --light-stroke: #E8E8E8;
    --white-color: #ffffff;
    --light-color: #F6F6F6;
    --gray-color: #EDEDED;
    --gray-200: #EFEFEF;
    --gray-100: #F1F1F1;
    --gold:#ffffff;
    --primary-overlay: rgba(18, 17, 17, 0.9);
    --primary-light-overlay: rgba(18, 17, 17, 0.6);
    --shadow-light: 0px 30px 23px rgba(0, 0, 0, 0.07);
    --box-shadow: 0px 12px 16px rgba(0, 0, 0, 0.04);
    --transition-base: all 0.3s;
    --ur3-stroke: #292828;
}



body {
    margin: 0;
    font-family: var(--body-font);
    background-color: var(--light-color);
    color:var(--white-color) !important;
}

input {
    outline: 0;
}
.img-fluid .logo{
max-width: 30% !important;
}

select {
    outline: 0;
    border: 0;
}

a {
    text-decoration: none;
    -webkit-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
}

ul {
    list-style-type: none;
    padding: 0;
    margin-bottom: 0;
}

button {
    border: 0;
    background-color: transparent;
}

.logo.img-fluid{
width: 30% !important;
}

h1,
.h1,
h2,
.h2,
h3,
.h3,
h4,
.h4,
h5,
.h5,
h6,
.h6 {
    color: var(--gold);
}

h1,
.h1,
h2,
.h2 {
    font-family: var(--heading-font);
}

.h1,
h1 {
    font-size: 48px;
}

@media (max-width: 991.98px) {
    .h1,
    h1 {
        font-size: 42px;
    }
}

.h2,
h2 {
    font-size: 40px;
}

@media (max-width: 991.98px) {
    .h2,
    h2 {
        font-size: 32px;
    }
}

.h3,
h3 {
    font-size: 32px;
}

@media (max-width: 991.98px) {
    .h3,
    h3 {
        font-size: 28px;
    }
}

.pt-120 {
    padding-top: 100px;
}

@media (max-width: 767.98px) {
    .pt-120 {
        padding-top: 70px;
    }
}

.ptb-120 {
    padding: 100px 0;
}

@media (max-width: 767.98px) {
    .ptb-120 {
        padding: 70px 0;
    }
}

.ptb-60 {
    padding: 60px 0;
}

.pt-30 {
    padding-top: 30px;
}

.pt-40 {
    padding-top: 40px;
}

.pb-30 {
    padding-bottom: 30px;
}

.pb-40 {
    padding-bottom: 40px;
}

.pb-120 {
    padding-bottom: 100px;
}

@media (max-width: 767.98px) {
    .pb-120 {
        padding-bottom: 70px;
    }
}

.mt-32 {
    margin-top: 32px;
}

.mt-40 {
    margin-top: 40px;
}

.mt-50 {
    margin-top: 50px;
}

.mt-60 {
    margin-top: 60px;
}

.mt-80 {
    margin-top: 80px;
}

.mb-32 {
    margin-bottom: 32px;
}

.mb-40 {
    margin-bottom: 40px;
}

.mb-50 {
    margin-bottom: 50px;
}

.mb-60 {
    margin-bottom: 60px;
}

/******************************* theme css **********************************/

.container-large {
    max-width: 1704px;
    margin: 0 auto;
    padding: 0 12px;
}

.primary-text-color {
    color: var(--white-color);
}

.text-color {
    color: var(--text-color);
}

.primary-bg-color {
    background-color: var(--primary-color);
}

.secondary-bg-color {
    background-color: var(--secondary-color);
}

.secondary-text-color {
    color: var(--secondary-color);
}

.gap-48 {
    gap: 48px;
}

.bottom-border {
    border-bottom: 1px solid var(--border-color);
}

.z--1 {
    z-index: -1;
}

.light-bg {
    background-color: var(--light-color);
}

.fs-sm {
    font-size: 14px;
}

.fs-xs {
    font-size: 12px;
}

.theme-input {
    width: 100%;
    border: 0;
    outline: 0;
    padding: 14px 24px;
    background-color: var(--light-color);
    font-weight: 300;
}

.theme-devider {
    width: 100%;
    height: 1px;
    background-color: var(--gray-200);
    display: block;
}

.gray-border-bottom {
    border: 1px solid var(--gray-200);
}

.mx-340 {
    max-width: 340px;
}

.text-font-family {
    font-family: var(--body-font);
}

.hover-secondary:hover {
    color: var(--secondary-color);
}

@-webkit-keyframes ticker {
    0% {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        visibility: visible;
    }
    100% {
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0);
    }
}

@keyframes ticker {
    0% {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        visibility: visible;
    }
    100% {
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0);
    }
}

@-webkit-keyframes theme_fadeInUp {
    0% {
        -webkit-transform: translateY(30px);
        transform: translateY(30px);
        opacity: 0;
    }
    50% {
        -webkit-transform: translateY(30px);
        transform: translateY(30px);
        opacity: 0;
    }
    100% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
        opacity: 1;
    }
}

@keyframes theme_fadeInUp {
    0% {
        -webkit-transform: translateY(30px);
        transform: translateY(30px);
        opacity: 0;
    }
    50% {
        -webkit-transform: translateY(30px);
        transform: translateY(30px);
        opacity: 0;
    }
    100% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
        opacity: 1;
    }
}

@-webkit-keyframes theme_fadeInDown {
    from {
        opacity: 0;
        -webkit-transform: translate3d(0, -50px, 0);
        transform: translate3d(0, -50px, 0);
    }
    to {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
}

@keyframes theme_fadeInDown {
    from {
        opacity: 0;
        -webkit-transform: translate3d(0, -50px, 0);
        transform: translate3d(0, -50px, 0);
    }
    to {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
}

@-webkit-keyframes product-hover {
    0% {
        -webkit-transform: translate(-50%, -50%) scale(0.8);
        transform: translate(-50%, -50%) scale(0.8);
    }
    100% {
        -webkit-transform: translate(-50%, -50%) scale(1);
        transform: translate(-50%, -50%) scale(1);
    }
}

@keyframes product-hover {
    0% {
        -webkit-transform: translate(-50%, -50%) scale(0.8);
        transform: translate(-50%, -50%) scale(0.8);
    }
    100% {
        -webkit-transform: translate(-50%, -50%) scale(1);
        transform: translate(-50%, -50%) scale(1);
    }
}

@-webkit-keyframes toTopFromBottom {
    49% {
        -webkit-transform: translateY(-100%);
        transform: translateY(-100%);
    }
    50% {
        opacity: 0;
        -webkit-transform: translateY(100%);
        transform: translateY(100%);
    }
    51% {
        opacity: 1;
    }
}

@keyframes toTopFromBottom {
    49% {
        -webkit-transform: translateY(-100%);
        transform: translateY(-100%);
    }
    50% {
        opacity: 0;
        -webkit-transform: translateY(100%);
        transform: translateY(100%);
    }
    51% {
        opacity: 1;
    }
}

@-webkit-keyframes shine {
    100% {
        left: 125%;
    }
}

@keyframes shine {
    100% {
        left: 125%;
    }
}

@-webkit-keyframes flipimage {
    0% {
        -webkit-transform: scale(1) rotateY(0deg);
        transform: scale(1) rotateY(0deg);
    }
    50% {
        -webkit-transform: scale(0.8) rotateY(90deg);
        transform: scale(0.8) rotateY(90deg);
    }
    100% {
        -webkit-transform: scale(1) rotateY(0);
        transform: scale(1) rotateY(0);
    }
}

@keyframes flipimage {
    0% {
        -webkit-transform: scale(1) rotateY(0deg);
        transform: scale(1) rotateY(0deg);
    }
    50% {
        -webkit-transform: scale(0.8) rotateY(90deg);
        transform: scale(0.8) rotateY(90deg);
    }
    100% {
        -webkit-transform: scale(1) rotateY(0);
        transform: scale(1) rotateY(0);
    }
}

@-webkit-keyframes loading {
    0% {
        width: 0;
    }
    100% {
        width: 100%;
    }
}

@keyframes loading {
    0% {
        width: 0;
    }
    100% {
        width: 100%;
    }
}

/******************************** components ******************************/

/************** header component ****************/

.topbar-info {
    gap: 48px;
}

.topbar-info .item-single+.item-single {
    position: relative;
}

.topbar-info .item-single+.item-single::before {
    content: '';
    position: absolute;
    left: -24px;
    top: -8px;
    width: 1px;
    height: calc(100% + 16px);
    background-color: var(--border-color);
}

.topbar-info span {
    font-size: 14px;
}

.topbar-info a {
    font-size: 14px;
}

.topbar-info>a {
    color: var(--white-color);
}

.topbar-info>a:hover {
    color: var(--secondary-color);
}

@media (max-width: 1399.98px) {
    .topbar-info {
        gap: 24px;
    }
    .topbar-info .item-single+.item-single::before {
        left: -12px;
    }
}

.ur-header-right {
    gap: 48px;
}

@media (max-width: 1700px) {
    .ur-header-right {
        gap: 32px;
    }
}

@media (max-width: 1460px) {
    .ur-header-right {
        gap: 14px;
    }
    .ur-header-right .user-cart .cart-btn .btn-text {
        display: none;
    }
}

@media (max-width: 575.98px) {
    .ur-header-right {
        gap: 1px;
    }
}

.ur-header-select select {
    background-color: var(--primary-color);
    color: var(--gold);
    font-size: 14px;
}

.ur-navmenu {
    text-align: center;
}

.ur-navmenu>ul {
    display: inline-block;
}

.ur-navmenu>ul>li>a {
    text-transform: uppercase;
}

.ur-navmenu ul {
    text-align: left;
}

.ur-navmenu ul li {
    display: inline-block;
}

.ur-navmenu ul li a {
    display: block;
    padding: 30px 25px;
    color: var(--gold);
    font-size: 14px;
}

.ur-navmenu ul li.has-submenu {
    position: relative;
}

.ur-navmenu ul li.has-submenu::after {
    content: '\f107';
    position: absolute;
    font-family: 'FontAwesome';
    right: 10px;
    top: 32px;
    font-size: 13px;
    color: var(--white-color);
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur-navmenu ul li.has-submenu>.submenu-wrapper {
    position: absolute;
    top: calc(100% + 10px);
    left: 0;
    min-width: 220px;
    background-color: var(--white-color);
    z-index: 10;
    padding: 6px 0;
    opacity: 0;
    visibility: hidden;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur-navmenu ul li.has-submenu>.submenu-wrapper li {
    display: block;
}

.ur-navmenu ul li.has-submenu>.submenu-wrapper li a {
    color: var(--primary-color);
    padding: 10px 24px;
    font-size: 16px;
}

.ur-navmenu ul li.has-submenu>.submenu-wrapper li:hover>a {
    padding-left: 30px;
    color: var(--secondary-color);
}

.ur-navmenu ul li.has-submenu>.submenu-wrapper li.has-submenu::after {
    content: '\f105';
    top: 10px;
    color: var(--primary-color);
}

.ur-navmenu ul li.has-submenu>.submenu-wrapper li.has-submenu>.submenu-wrapper {
    content: '\f105';
    position: absolute;
    left: 100%;
    top: 10px;
}

.ur-navmenu ul li.has-submenu>.submenu-wrapper li.has-submenu:hover>.submenu-wrapper {
    top: 0;
}

.ur-navmenu ul li.has-submenu:hover>.submenu-wrapper {
    top: 100%;
    opacity: 1;
    visibility: visible;
}

.ur-navmenu ul li.has-submenu:hover>.ur-megamenu {
    opacity: 1;
    visibility: visible;
    top: 100%;
}

.ur-navmenu ul li:hover>a {
    color: var(--gold);
}

.ur-navmenu ul li:hover::after {
    color: var(--secondary-color);
}

.ur-megamenu {
    position: absolute;
    background-color: var(--white-color);
    top: calc(100% + 10px);
    left: -500px;
    z-index: 10;
    width: 1320px;
    padding: 60px;
    opacity: 0;
    visibility: hidden;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
    -webkit-box-shadow: var(--box-shadow);
    box-shadow: var(--box-shadow);
}

.ur-megamenu .megamenu-row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    gap: 60px;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
}

.ur-megamenu .megamenu-row .megamenu-column {
    width: 15%;
}

.ur-megamenu .megamenu-row .megamenu-column.border-r {
    position: relative;
}

.ur-megamenu .megamenu-row .megamenu-column.border-r::after {
    content: '';
    position: absolute;
    right: 0px;
    top: 0;
    width: 1px;
    height: 100%;
    background-color: var(--light-stroke);
}

.ur-megamenu .megamenu-row .megamenu-column.banner {
    width: 20%;
}

.ur-megamenu .megamenu-row .megamenu-column .column-title {
    font-size: 14px;
    text-transform: uppercase;
    margin-bottom: 15px;
}

.ur-megamenu .megamenu-row .megamenu-column .pages-list li {
    display: block;
}

.ur-megamenu .megamenu-row .megamenu-column .pages-list li a {
    padding: 9px 0;
    color: var(--primary-color);
    font-weight: 300;
    font-size: 15px;
}

.ur-megamenu .megamenu-row .megamenu-column .pages-list li a:hover {
    color: var(--secondary-color);
    padding-left: 6px;
}

@media (max-width: 1460px) {
    .ur-megamenu {
        left: -450px;
    }
}

@media (max-width: 1399.98px) {
    .ur-megamenu {
        width: 1160px;
        padding: 45px;
        left: -430px;
    }
}

.ur-user-links button {
    color: var(--white-color);
    font-size: 14px;
    padding: 30px 15px;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur-user-links button:hover {
    color: var(--secondary-color);
}

.ur-user-links .user-menu {
    min-width: 220px;
    padding: 8px 0;
    background-color: var(--white-color);
    top: calc(100px + 10px);
    left: 0;
    -webkit-box-shadow: var(--shadow-light);
    box-shadow: var(--shadow-light);
    opacity: 0;
    visibility: hidden;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
    z-index: 10;
}

.ur-user-links .user-menu li {
    display: block;
}

.ur-user-links .user-menu li a {
    display: block;
    padding: 7px 24px;
    color: var(--primary-color);
}

.ur-user-links .user-menu li a:hover {
    color: var(--secondary-color);
    padding-left: 30px;
}

.ur-user-links:hover .user-menu {
    opacity: 1;
    visibility: visible;
    top: 100%;
}

@media (max-width: 1460px) {
    .ur-user-links .user-menu {
        min-width: 180px;
        max-width: 180px;
    }
}

.user-cart {
    padding: 28px 0;
}

.user-cart .cart-btn {
    color: var(--white-color);
    font-size: 14px;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.user-cart .cart-btn:hover {
    color: var(--secondary-color);
}

.user-cart:hover .header-cart-box {
    opacity: 1;
    visibility: visible;
    top: 100%;
}

.header-search .search-btn {
    color: var(--white-color);
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.header-search .search-btn:hover {
    color: var(--secondary-color);
}

.header-search .search-form {
    min-width: 320px;
    padding: 0 12px;
}

.header-search .search-form input {
    border: 1px solid var(--light-stroke);
}

.header-search .search-form .submit-btn {
    width: 77px;
    height: 53px;
    background-color: var(--primary-color);
    color: var(--white-color);
    -ms-flex-negative: 0;
    flex-shrink: 0;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.header-search .search-form .submit-btn:hover {
    background-color: var(--secondary-color);
}

.header-link {
    color: var(--white-color);
    padding: 24px 15px;
}

.header-link:hover {
    color: var(--secondary-color);
}

.header-toggle button span {
    background-color: var(--white-color);
}

.ur-header-right>div+div {
    position: relative;
}

.ur-header-right>div+div::before {
    content: '';
    position: absolute;
    left: -24px;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    width: 1px;
    height: 20px;
    background-color: var(--border-color);
}

@media (max-width: 1460px) {
    .ur-header-right>div+div::before {
        left: -7px;
    }
}

/*************** header style 2 *****************/

.header-style-2 .ur2-navmenu>ul>li>a {
    color: var(--primary-color);
}

.header-style-2 .ur2-navmenu>ul>li.has-submenu::after {
    color: var(--primary-color);
}

.header-style-2 .ur2-navmenu>ul>li:hover>a {
    color: var(--secondary-color);
}

.header-style-2 .ur2-navmenu>ul>li:hover::after {
    color: var(--secondary-color);
}

.header-style-2 .ur-user-links .user-btn {
    color: var(--primary-color);
}

.header-style-2 .ur-user-links .user-btn:hover {
    color: var(--secondary-color);
}

.header-style-2 .user-cart .cart-btn {
    color: var(--primary-color);
}

.header-style-2 .user-cart .cart-btn:hover {
    color: var(--secondary-color);
}

.header-style-2 .header-link {
    color: var(--primary-color);
}

.header-style-2 .header-link:hover {
    color: var(--secondary-color);
}

.header-style-2 .header-search .search-btn {
    color: var(--primary-color);
}

.header-style-2 .header-search .search-btn:hover {
    color: var(--secondary-color);
}

.header-style-2 .header-toggle button span {
    background-color: var(--primary-color);
}

.header-style-2 .ur-header-right>div+div::before {
    background-color: var(--light-stroke);
}

/**************** header style 3 ****************/

.ur3-infobar p span svg {
    -webkit-transform: translateY(-1px);
    -ms-transform: translateY(-1px);
    transform: translateY(-1px);
}

.ur3-infobar .info-link {
    color: var(--white-color);
}

.ur3-infobar .info-link:hover {
    color: var(--secondary-color);
}

.ur3-header-select .icon {
    -webkit-transform: translateY(-3px);
    -ms-transform: translateY(-3px);
    transform: translateY(-3px);
}

.ur3-header-select .nice_select {
    background-color: transparent;
    border: 0;
    color: var(--primary-color);
    font-weight: 300;
}

.ur3-header-select .nice_select::after {
    border-color: var(--primary-color);
    border-width: 1px;
    right: 15px;
    margin-top: -6px;
}

.ur3-header-select .nice_select .list li {
    font-weight: 300;
}

.ur3-header-select .ur3-currency-select {
    position: relative;
}

.ur3-header-select .ur3-currency-select::before {
    content: '';
    position: absolute;
    left: -24px;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    width: 1px;
    height: 15px;
    background-color: #CACACA;
}

@media (max-width: 575.98px) {
    .ur3-header-select .ur3-currency-select::before {
        left: -8px;
    }
}

.ur3-header-middle {
    padding: 12px 0;
    border-bottom: 1px solid var(--gray-color);
    position: relative;
}

.ur3-header-search .submit-btn {
    font-size: 14px;
}

.ur3-header-search input {
    border: 0;
    font-size: 14px;
    color: var(--primary-color);
    text-transform: uppercase;
}

.ur3-header-search input::-webkit-input-placeholder {
    color: var(--primary-color);
}

.ur3-header-search input:-ms-input-placeholder {
    color: var(--primary-color);
}

.ur3-header-search input::-ms-input-placeholder {
    color: var(--primary-color);
}

.ur3-header-search input::placeholder {
    color: var(--primary-color);
}

.ur3-header-btns a {
    color: var(--primary-color);
}

.ur3-header-btns a svg path {
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur3-header-btns a:hover {
    color: var(--secondary-color);
}

.ur3-header-btns a:hover svg path {
    fill: var(--secondary-color);
}

.ur3-header-btns a+a {
    position: relative;
}

.ur3-header-btns a+a::before {
    content: '';
    position: absolute;
    left: -24px;
    top: 0;
    width: 1px;
    height: 15px;
    background-color: #CACACA;
}

@media (max-width: 575.98px) {
    .ur3-header-btns a+a::before {
        left: -10px;
        top: 4px;
    }
}

@media (max-width: 991.98px) {
    .ur3-nav-header {
        padding: 16px 0;
    }
}

.ur3-header-toggle {
    width: 40px;
    display: inline-block;
}

.ur3-header-toggle span {
    width: 100%;
    height: 1px;
    background-color: var(--primary-color);
    display: block;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
    position: relative;
    z-index: 1;
}

.ur3-header-toggle span::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 0;
    z-index: -1;
    background-color: var(--secondary-color);
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur3-header-toggle span+span {
    margin-top: 6px;
}

.ur3-header-toggle span:nth-child(1)::before,
.ur3-header-toggle span:nth-child(3)::before {
    right: 0;
    left: auto;
}

.ur3-header-toggle:hover span::before {
    right: 0;
    left: auto;
    width: 100%;
}

.ur3-header-toggle:hover span:nth-child(1)::before,
.ur3-header-toggle:hover span:nth-child(3)::before {
    left: 0;
    right: auto;
}

.ur3-nav-menu>ul>li>a {
    color: var(--primary-color);
    position: relative;
    z-index: 1;
}

.ur3-nav-menu>ul>li>a::before {
    content: '';
    position: absolute;
    left: 6%;
    top: 20px;
    width: 95px;
    height: 40px;
    border: 1px solid var(--secondary-color);
    border-radius: 15%;
    opacity: 0;
    z-index: -1;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur3-nav-menu>ul>li>a:hover::before {
    opacity: 1;
    border-radius: 50%;
}

.ur3-nav-menu>ul>li.has-submenu::after {
    color: var(--primary-color);
}

.ur3-nav-menu>ul>li:hover::after {
    color: var(--secondary-color);
}

@media (max-width: 1199.98px) {
    .ur3-nav-menu>ul>li>a {
        padding: 30px 20px;
    }
    .ur3-nav-menu>ul>li>a::before {
        width: 85px;
    }
    .ur3-nav-menu>ul>li.has-submenu::after {
        right: 5px;
    }
}

.ur3-nav-menu .ur-megamenu {
    left: -550px;
}

@media (max-width: 1399.98px) {
    .ur3-nav-menu .ur-megamenu {
        left: -470px;
    }
}

@media (max-width: 1199.98px) {
    .ur3-nav-menu .ur-megamenu {
        width: 960px;
        left: -375px;
    }
    .ur3-nav-menu .ur-megamenu .megamenu-row {
        gap: 20px;
    }
    .ur3-nav-menu .ur-megamenu .megamenu-row .megamenu-column.border-r::after {
        display: none;
    }
}

/************ sticky header ***********/

.header-sticky {
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.header-sticky.sticky-on {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    z-index: 50;
    -webkit-animation: 0.3s theme_fadeInDown;
    animation: 0.3s theme_fadeInDown;
}

.header-sticky.sticky-on .topbar {
    display: none !important;
}

.header-sticky.sticky-on .header-style-2 {
    -webkit-box-shadow: var(--box-shadow);
    box-shadow: var(--box-shadow);
}

.header-sticky.sticky-on .ur3-infobar,
.header-sticky.sticky-on .ur3-header-middle {
    display: none;
}

.header-sticky.sticky-on .ur3-nav-header {
    -webkit-box-shadow: var(--box-shadow);
    box-shadow: var(--box-shadow);
}

/******************** preloader ******************/

.preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    background-color: var(--white-color);
    z-index: 200;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
}

.preloader h1 {
    font-family: var(--heading-font);
}

.preloader .preload-progress {
    width: 250px;
    height: 8px;
    border-radius: 30px;
}

.preloader .preload-progress span {
    width: 100%;
    height: 100%;
    display: inline-block;
    border-radius: 30px;
    background-color: var(--primary-color);
    -webkit-animation: 6s loading;
    animation: 6s loading;
}

/**************** scroll top button ***************/

.scroll-top-btn {
    width: 50px;
    height: 50px;
    background-color: var(--primary-color);
    color: var(--white-color);
    border-radius: 50px;
    position: fixed;
    bottom: 40px;
    right: 40px;
    z-index: 100;
    font-size: 35px;
}

.template-btn {
    display: inline-block;
    font-weight: 500;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
    padding: 0;
}

.template-btn.primary-btn {
    background-color: var(--primary-color);
    color: var(--white-color);
    position: relative;
    z-index: 1;
}

.template-btn.primary-btn::before,
.template-btn.primary-btn::after {
    content: '';
    position: absolute;
    right: 0;
    bottom: 0;
    background-color: var(--secondary-color);
    -webkit-transition: 0.5s;
    -o-transition: 0.5s;
    transition: 0.5s;
}

.template-btn.primary-btn::before {
    height: 0;
    width: 2px;
}

.template-btn.primary-btn::after {
    width: 0;
    height: 2px;
}

.template-btn.primary-btn span {
    padding: 14px 36px;
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: 100%;
    height: 100%;
}

.template-btn.primary-btn span::before,
.template-btn.primary-btn span::after {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    background-color: var(--secondary-color);
    -webkit-transition: 0.5s;
    -o-transition: 0.5s;
    transition: 0.5s;
}

.template-btn.primary-btn span::before {
    width: 2px;
    height: 0;
}

.template-btn.primary-btn span::after {
    width: 0;
    height: 2px;
}

.template-btn.primary-btn:hover {
    background-color: transparent;
    color: var(--secondary-color);
}

.template-btn.primary-btn:hover::before {
    height: 100%;
}

.template-btn.primary-btn:hover::after {
    width: 100%;
}

.template-btn.primary-btn:hover span::before {
    height: 100%;
}

.template-btn.primary-btn:hover span::after {
    width: 100%;
}

.template-btn.outline-btn {
    border: 1px solid var(--primary-color);
    color: var(--primary-color);
    background-color: transparent;
    position: relative;
}

.template-btn.outline-btn::before,
.template-btn.outline-btn::after {
    content: '';
    position: absolute;
    background-color: var(--secondary-color);
    left: 0;
    top: 0;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.template-btn.outline-btn::before {
    width: 2px;
    height: 0;
}

.template-btn.outline-btn::after {
    width: 0;
    height: 2px;
}

.template-btn.outline-btn span {
    padding: 14px 36px;
    display: inline-block;
    position: relative;
}

.template-btn.outline-btn span::before,
.template-btn.outline-btn span::after {
    content: '';
    position: absolute;
    bottom: 0;
    right: 0;
    background-color: var(--secondary-color);
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.template-btn.outline-btn span::before {
    width: 0;
    height: 2px;
}

.template-btn.outline-btn span::after {
    width: 2px;
    height: 0;
}

.template-btn.outline-btn:hover {
    color: var(--secondary-color);
    border-color: transparent;
}

.template-btn.outline-btn:hover::before {
    height: 100%;
}

.template-btn.outline-btn:hover::after {
    width: 100%;
}

.template-btn.outline-btn:hover span::before {
    width: 100%;
}

.template-btn.outline-btn:hover span::after {
    height: 100%;
}

.template-btn.outline-btn-white {
    border: 1px solid var(--white-color);
    color: var(--white-color);
    background-color: transparent;
    position: relative;
}

.template-btn.outline-btn-white::before,
.template-btn.outline-btn-white::after {
    content: '';
    position: absolute;
    background-color: var(--secondary-color);
    left: 0;
    top: 0;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.template-btn.outline-btn-white::before {
    width: 2px;
    height: 0;
}

.template-btn.outline-btn-white::after {
    width: 0;
    height: 2px;
}

.template-btn.outline-btn-white span {
    padding: 14px 36px;
    display: inline-block;
    position: relative;
}

.template-btn.outline-btn-white span::before,
.template-btn.outline-btn-white span::after {
    content: '';
    position: absolute;
    bottom: 0;
    right: 0;
    background-color: var(--secondary-color);
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.template-btn.outline-btn-white span::before {
    width: 0;
    height: 2px;
}

.template-btn.outline-btn-white span::after {
    width: 2px;
    height: 0;
}

.template-btn.outline-btn-white:hover {
    color: var(--secondary-color);
    border-color: transparent;
}

.template-btn.outline-btn-white:hover::before {
    height: 100%;
}

.template-btn.outline-btn-white:hover::after {
    width: 100%;
}

.template-btn.outline-btn-white:hover span::before {
    width: 100%;
}

.template-btn.outline-btn-white:hover span::after {
    height: 100%;
}

.template-btn.secondary-btn {
    background-color: var(--secondary-color);
    color: var(--white-color);
    position: relative;
    z-index: 1;
}

.template-btn.secondary-btn::before,
.template-btn.secondary-btn::after {
    content: '';
    position: absolute;
    right: 0;
    bottom: 0;
    background-color: var(--secondary-color);
    -webkit-transition: 0.5s;
    -o-transition: 0.5s;
    transition: 0.5s;
}

.template-btn.secondary-btn::before {
    height: 0;
    width: 2px;
}

.template-btn.secondary-btn::after {
    width: 0;
    height: 2px;
}

.template-btn.secondary-btn span {
    padding: 14px 36px;
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: 100%;
    height: 100%;
}

.template-btn.secondary-btn span::before,
.template-btn.secondary-btn span::after {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    background-color: var(--secondary-color);
    -webkit-transition: 0.5s;
    -o-transition: 0.5s;
    transition: 0.5s;
}

.template-btn.secondary-btn span::before {
    width: 2px;
    height: 0;
}

.template-btn.secondary-btn span::after {
    width: 0;
    height: 2px;
}

.template-btn.secondary-btn:hover {
    background-color: transparent;
    color: var(--secondary-color);
}

.template-btn.secondary-btn:hover::before {
    height: 100%;
}

.template-btn.secondary-btn:hover::after {
    width: 100%;
}

.template-btn.secondary-btn:hover span::before {
    height: 100%;
}

.template-btn.secondary-btn:hover span::after {
    width: 100%;
}

.template-video-btn {
    width: 120px;
    height: 120px;
    background-color: transparent;
    color: var(--white-color);
    border: 1px solid var(--white-color);
    border-radius: 50%;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    font-size: 24px;
}

/******* product cards *********/

.ur-hero-feature-card {
    max-width: 430px;
    border: 16px solid var(--primary-color);
    gap: 30px;
    padding: 15px 20px;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
    position: absolute;
    bottom: 130px;
    right: 124px;
}

.ur-hero-feature-card h5 {
    line-height: 1.4em;
}

.ur-hero-feature-card .wish-btn,
.ur-hero-feature-card .card-btn {
    color: var(--text-color);
}

.ur-hero-feature-card .wish-btn:hover,
.ur-hero-feature-card .card-btn:hover {
    color: var(--secondary-color);
}

.ur-hero-feature-card:hover {
    -webkit-transform: translateY(-6px);
    -ms-transform: translateY(-6px);
    transform: translateY(-6px);
}

@media (max-width: 767.98px) {
    .ur-hero-feature-card {
        right: 12px;
        bottom: 30px;
    }
}

@media (max-width: 460px) {
    .ur-hero-feature-card {
        max-width: calc(100% - 24px);
    }
}

@media (max-width: 400px) {
    .ur-hero-feature-card {
        display: none !important;
    }
}

.pp-overlay-card {
   height: 440px;
}


.pp-overlay-card img {
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
    height: 100%;
    object-fit: cover;
}

.pp-overlay-card .category-title {
    background-color: var(--white-color);
    padding: 0 5px;
    display: inline-block;
    bottom: 60px;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
    min-width: 176px;
    height: 70px;
    font-size: 13px;
    font-weight: 500;
    text-align: center;
    line-height: 70px;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.pp-overlay-card .pp-overlay {
    width: calc(100% - 60px);
    height: calc(100% - 60px);
    top: 30px;
    left: 30px;
    background-color: var(--primary-overlay);
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-transform: scale(0.7);
    -ms-transform: scale(0.7);
    transform: scale(0.7);
    opacity: 0;
    visibility: hidden;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.pp-overlay-card .pp-overlay span {
    font-size: 24px;
    color: var(--white-color);
}

.pp-overlay-card:hover img {
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
}

.pp-overlay-card:hover .category-title {
    bottom: 80px;
    opacity: 0;
    visibility: hidden;
}

.pp-overlay-card:hover .pp-overlay {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    opacity: 1;
    visibility: visible;
}

.ur-product-card .ur-badge {
    padding: 4px 12px;
    -webkit-box-shadow: 0px 4px 23px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 4px 23px rgba(0, 0, 0, 0.1);
    right: 20px;
    top: 20px;
    z-index: 2;
    font-size: 14px;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur-product-card .ur-badge.sale-badge {
    background-color: var(--secondary-color);
    color: var(--white-color);
}

.ur-product-card .ur-badge.coupon-badge {
    background-color: var(--white-color);
    color: var(--primary-color);
}

.ur-product-card {
    background-color: #ddd8d8;
    padding: 15px 15px;
    overflow: none;
     /* height: 300px; */
    width: 100%; 
}


.ur-product-card .feature-image img {
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur-product-card .feature-image .product-overlay {
    width: 120%;
    height: 120%;
    border-radius: 90px;
    /* background-color: var(--primary-color); */
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    top: 10%;
    left: 28%;
    -webkit-transform: translate(-50%, -50%) scale(0.4);
    -ms-transform: translate(-50%, -50%) scale(0.4);
    transform: translate(-50%, -50%) scale(0.4);
    -webkit-transition: 0.5s;
    -o-transition: 0.5s;
    transition: 0.5s;
    overflow: hidden;
    opacity: 0;
    visibility: hidden;
}

.ur-product-card .feature-image .product-overlay .product-btns {
    width: 150px;
    height: 50px;
    background-color: var(--white-color);
    overflow: hidden;
}

.ur-product-card .feature-image .product-overlay .product-btns a {
    background-color: var(--white-color);
    color: var(--primary-color);
    width: 50px;
    height: 50px;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -ms-flex-negative: 0;
    flex-shrink: 0;
}

.ur-product-card .feature-image .product-overlay .product-btns a:hover {
    color: var(--secondary-color);
}

.ur-product-card .feature-image .product-overlay .product-btns a:hover i,
.ur-product-card .feature-image .product-overlay .product-btns a:hover svg {
    -webkit-animation: 0.3s toTopFromBottom forwards;
    animation: 0.3s toTopFromBottom forwards;
}

.ur-product-card .feature-image .product-overlay .product-btns a+a {
    position: relative;
}

.ur-product-card .feature-image .product-overlay .product-btns a+a::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    width: 1px;
    height: 20px;
    background-color: var(--border-gray);
}

.ur-product-card .product-title {
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur-product-card .product-title:hover {
    color: var(--secondary-color);
}

.ur-product-card:hover .coupon-badge {
    background-color: var(--secondary-color);
    color: var(--white-color);
}

.ur-product-card:hover .feature-image img {
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
}

.ur-product-card:hover .feature-image .product-overlay {
    -webkit-transform: translate(-50%, -50%) scale(1) rotate(0);
    -ms-transform: translate(-50%, -50%) scale(1) rotate(0);
    transform: translate(-50%, -50%) scale(1) rotate(0);
    opacity: 1;
    visibility: visible;
}

@media (max-width: 575.98px) {
    .ur-product-card.card-sm-small {
        max-width: 400px;
        margin-left: auto;
        margin-right: auto;
    }
}

.quantity-box {
    padding: 10px 12px;
    border: 1px solid var(--light-stroke);
}

.quantity-box button {
    width: 30px;
    height: 30px;
    background-color: var(--light-stroke);
    font-size: 12px;
    padding: 0;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.quantity-box input {
    max-width: 50px;
    text-align: center;
    padding: 0;
    border: 0;
    font-weight: 300;
    font-size: 18px;
}

.horizontal-product-card {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    gap: 40px;
}

.horizontal-product-card .feature-image {
    width: 300px;
    -ms-flex-negative: 0;
    flex-shrink: 0;
}

.horizontal-product-card .feature-image img {
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.horizontal-product-card .category-btn {
    font-size: 12px;
    text-transform: uppercase;
    color: var(--secondary-color);
    display: inline-block;
    margin-bottom: 8px;
}

.horizontal-product-card .product-title {
    display: block;
    margin-bottom: 10px;
}

.horizontal-product-card .product-title h5 {
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.horizontal-product-card .product-title h5:hover {
    color: var(--secondary-color);
}

.horizontal-product-card .pricing span {
    font-size: 14px;
}

.horizontal-product-card .pricing .current-price {
    color: var(--primary-color);
    font-weight: 500;
}

.horizontal-product-card .pricing .sale-price {
    font-weight: 300;
    position: relative;
}

.horizontal-product-card .pricing .sale-price::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    width: 100%;
    height: 1px;
    background-color: var(--text-color);
}

.horizontal-product-card .add_to_cart_btn {
    padding: 12px 32px;
    border: 1px solid var(--primary-color);
    color: var(--primary-color);
    text-transform: uppercase;
    font-weight: 500;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.horizontal-product-card .add_to_cart_btn span {
    display: inline-block;
    -webkit-transform: translateY(-2px);
    -ms-transform: translateY(-2px);
    transform: translateY(-2px);
}

.horizontal-product-card .add_to_cart_btn:hover {
    background-color: var(--primary-color);
    color: var(--white-color);
}

.horizontal-product-card .action_btn {
    width: 50px;
    height: 50px;
    border: 1px solid var(--light-stroke);
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
    border-radius: 2px;
}

.horizontal-product-card .action_btn svg path {
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.horizontal-product-card .action_btn:hover {
    background-color: var(--primary-color);
    color: var(--white-color);
}

.horizontal-product-card .action_btn:hover svg path {
    fill: var(--white-color);
}

.horizontal-product-card:hover .feature-image img {
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05);
}

@media (max-width: 1399.98px) {
    .horizontal-product-card {
        display: block;
    }
    .horizontal-product-card .feature-image {
        width: 100%;
        margin-bottom: 20px;
    }
}

.white-btn {
    background-color: var(--white-color);
    color: var(--primary-color);
}

.white-btn:hover {
    background-color: var(--primary-color);
    color: var(--white-color);
}

.ur3-product-card {
    background-color: var(--white-color);
    position: relative;
}

.ur3-product-card::before,
.ur3-product-card::after {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    background-color: var(--light-stroke);
    -webkit-transition: 0.6s;
    -o-transition: 0.6s;
    transition: 0.6s;
}

.ur3-product-card::before {
    width: 0;
    height: 2px;
}

.ur3-product-card::after {
    width: 2px;
    height: 2px;
}

.ur3-product-card .card-items {
    padding: 0 24px 60px;
    position: relative;
}

.ur3-product-card .card-items::before,
.ur3-product-card .card-items::after {
    content: '';
    position: absolute;
    right: 0;
    bottom: 0;
    background-color: var(--light-stroke);
    -webkit-transition: 0.6s;
    -o-transition: 0.6s;
    transition: 0.6s;
}

.ur3-product-card .card-items::before {
    width: 2px;
    height: 0;
}

.ur3-product-card .card-items::after {
    width: 0;
    height: 3px;
}

.ur3-product-card .ur-badge {
    padding: 4px 12px;
    -webkit-box-shadow: 0px 4px 23px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 4px 23px rgba(0, 0, 0, 0.1);
    right: 20px;
    top: 20px;
    z-index: 2;
    font-size: 14px;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur3-product-card .ur-badge.sale-badge {
    background-color: var(--secondary-color);
    color: var(--white-color);
}

.ur3-product-card .ur-badge.coupon-badge {
    background-color: var(--primary-color);
    color: var(--white-color);
}

.ur3-product-card .feature-image img {
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur3-product-card h4 {
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur3-product-card h4:hover {
    color: var(--secondary-color);
}

.ur3-product-card:hover::before {
    width: 100%;
}

.ur3-product-card:hover::after {
    height: 100%;
}

.ur3-product-card:hover .card-items::before {
    height: 100%;
}

.ur3-product-card:hover .card-items::after {
    width: 100%;
}

.ur3-product-card:hover .feature-image img {
    -webkit-transform: scale(1.03);
    -ms-transform: scale(1.03);
    transform: scale(1.03);
}

.ur3-product-card-2 {
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
    padding-bottom: 20px;
    position: relative;
}

.ur3-product-card-2.right-border::after {
    content: '';
    position: absolute;
    right: -12px;
    top: 0;
    width: 1px;
    height: 100%;
    background-color: var(--light-stroke);
}

.ur3-product-card-2 .coupon-badge {
    background-color: var(--white-color);
    -webkit-box-shadow: var(--box-shadow);
    box-shadow: var(--box-shadow);
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
    font-size: 14px;
    padding: 4px 12px;
    right: 30px;
    top: 0;
    z-index: 2;
}

.ur3-product-card-2 .feature-image {
    padding: 24px;
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
}

.ur3-product-card-2 .feature-image .product-image {
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
    max-width: 200px;
}

.ur3-product-card-2 .feature-image .hover-product {
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    max-width: 200px;
    opacity: 0;
}

.ur3-product-card-2 .feature-image .product-btns {
    width: 150px;
    height: 50px;
    background-color: var(--white-color);
    position: absolute;
    left: 50%;
    top: calc(50% + 10px);
    -webkit-transform: translate(-50%, -50%) scale(0.8);
    -ms-transform: translate(-50%, -50%) scale(0.8);
    transform: translate(-50%, -50%) scale(0.8);
    opacity: 0;
    visibility: hidden;
    overflow: hidden;
    -webkit-box-shadow: 0px 12px 16px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 12px 16px rgba(0, 0, 0, 0.1);
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur3-product-card-2 .feature-image .product-btns a {
    background-color: var(--white-color);
    color: var(--primary-color);
    width: 50px;
    height: 50px;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -ms-flex-negative: 0;
    flex-shrink: 0;
}

.ur3-product-card-2 .feature-image .product-btns a:hover {
    color: var(--secondary-color);
}

.ur3-product-card-2 .feature-image .product-btns a:hover i,
.ur3-product-card-2 .feature-image .product-btns a:hover svg {
    -webkit-animation: 0.3s toTopFromBottom forwards;
    animation: 0.3s toTopFromBottom forwards;
}

.ur3-product-card-2 .feature-image .product-btns a+a {
    position: relative;
}

.ur3-product-card-2 .feature-image .product-btns a+a::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    width: 1px;
    height: 20px;
    background-color: var(--border-gray);
}

.ur3-product-card-2 h4 {
    font-size: 20px;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur3-product-card-2 h4:hover {
    color: var(--secondary-color);
}

.ur3-product-card-2:hover .coupon-badge {
    background-color: var(--primary-color);
    color: var(--white-color);
}

.ur3-product-card-2:hover .feature-image .product-image {
    opacity: 0;
}

.ur3-product-card-2:hover .feature-image .hover-product {
    opacity: 0.7;
    -webkit-animation: 1s product-hover linear;
    animation: 1s product-hover linear;
}

.ur3-product-card-2:hover .feature-image .product-btns {
    opacity: 1;
    top: 50%;
    -webkit-transform: translate(-50%, -50%) scale(1);
    -ms-transform: translate(-50%, -50%) scale(1);
    transform: translate(-50%, -50%) scale(1);
    visibility: visible;
}

@media (max-width: 1199.98px) {
    .ur3-product-card-2 {
        background-color: var(--white-color);
        -webkit-box-shadow: var(--box-shadow);
        box-shadow: var(--box-shadow);
    }
    .ur3-product-card-2.right-border::after {
        display: none;
    }
}

@media (max-width: 575.98px) {
    .ur3-product-card-2 {
        max-width: 350px;
        margin: 0 auto;
    }
}

.ur3-featured-product-box {
    padding: 40px;
}

/*************** footer section start *****************/

.footer-widget {
    margin-bottom: 40px;
}

.footer-widget p {
    color: var(--text-color);
}

.footer-social {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    gap: 10px;
}

.footer-social a {
    width: 44px;
    height: 44px;
    display: inline-block;
    border: 1px solid var(--border-gray);
    border-radius: 50%;
    text-align: center;
    line-height: 44px;
    color: var(--primary-color);
}

.footer-social a:hover {
    background-color: var(--primary-color);
    color: var(--white-color);
    border-color: var(--primary-color);
}

.footer-links li+li {
    margin-top: 10px;
}

.footer-links li a {
    font-weight: 300;
    color: var(--text-color);
    position: relative;
}

.footer-links li a::before {
    content: '//';
    position: absolute;
    left: 0;
    top: 0;
    color: var(--secondary-color);
    opacity: 0;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.footer-links li a:hover {
    color: var(--secondary-color);
    padding-left: 20px;
}

.footer-links li a:hover::before {
    opacity: 1;
}

.footer-contact-list li {
    font-weight: 300;
    color: var(--text-color);
}

.footer-contact-list li+li {
    margin-top: 16px;
}

.footer-copyright {
    padding: 40px 0;
    border-top: 1px solid var(--gray-200);
}

.footer-copyright .copyright-links li {
    display: inline-block;
}

.footer-copyright .copyright-links li a {
    display: block;
    color: var(--black-color);
    padding: 6px 8px;
}

.footer-copyright .copyright-links li a:hover {
    color: var(--secondary-color);
}

/**************** footer style 2 ****************/

.footer-social-style-2 a {
    color: var(--text-color);
    margin-right: 18px;
}

.footer-social-style-2 a:hover {
    color: var(--secondary-color);
}

.footer-social-style-2 a:hover i {
    -webkit-animation: 0.4s toTopFromBottom forwards;
    animation: 0.4s toTopFromBottom forwards;
}

.ur2-footer-newsletter {
    border-top: 1px solid var(--border-dark);
    border-bottom: 1px solid var(--border-dark);
}

.ur2-newsletter-form {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    gap: 15px;
}

.ur2-newsletter-form input[type="email"] {
    width: 100%;
}

.ur2-newsletter-form button {
    -ms-flex-negative: 0;
    flex-shrink: 0;
}

@media (max-width: 400px) {
    .ur2-newsletter-form {
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }
}

/****************** footer style 3 **********************/

@media (max-width: 1460px) {
    .ur3-footer-widget h3 {
        font-size: 30px;
    }
    .ur3-footer-widget .widget-title {
        font-size: 20px;
    }
}

@media (max-width: 1399.98px) {
    .ur3-footer-widget .widget-title {
        font-size: 18px;
    }
}

.footer-instagram-gallery {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    gap: 20px;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    max-width: 500px;
}

.footer-instagram-gallery li {
    width: calc(33% - 15px);
    position: relative;
    overflow: hidden;
}

.footer-instagram-gallery li::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.45);
    z-index: 1;
    -webkit-transform: scale(0.7);
    -ms-transform: scale(0.7);
    transform: scale(0.7);
    opacity: 0;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.footer-instagram-gallery li img {
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
    width: 140px;
    height: 140px;
    object-fit: cover;
}

.footer-instagram-gallery li a {
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%) scale(0);
    -ms-transform: translate(-50%, -50%) scale(0);
    transform: translate(-50%, -50%) scale(0);
    width: 50px;
    height: 50px;
    background-color: var(--white-color);
    border-radius: 50%;
    border-radius: 50%;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    z-index: 2;
    color: var(--secondary-color);
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.footer-instagram-gallery li a:hover {
    background-color: var(--primary-color);
    color: var(--white-color);
}

.footer-instagram-gallery li:hover::before {
    opacity: 1;
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
}

.footer-instagram-gallery li:hover img {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
}

.footer-instagram-gallery li:hover a {
    -webkit-transform: translate(-50%, -50%) scale(1);
    -ms-transform: translate(-50%, -50%) scale(1);
    transform: translate(-50%, -50%) scale(1);
}

@media (max-width: 1199.98px) {
    .footer-instagram-gallery {
        gap: 15px;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start;
    }
    .footer-instagram-gallery li {
        width: calc(33% - 10px);
    }
}

@media (max-width: 575.98px) {
    .footer-instagram-gallery {
        gap: 10px;
    }
    .footer-instagram-gallery li {
        width: calc(33% - 6px);
    }
}

.ur3-footer-links li {
    display: block;
}

.ur3-footer-links li+li {
    margin-top: 6px;
}

.ur3-footer-links li a {
    color: #8D8D8D;
    position: relative;
    padding: 2px 0 0 15px;
    display: block;
}

.ur3-footer-links li a::before {
    content: '';
    position: absolute;
    left: 0;
    top: 12px;
    width: 5px;
    height: 5px;
    background-color: var(--secondary-color);
    border-radius: 50%;
}

.ur3-footer-links li a:hover {
    color: var(--secondary-color);
    padding-left: 20px;
}

.ur3-footer-social {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    gap: 10px;
}

.ur3-footer-social a {
    width: 44px;
    height: 44px;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    border: 1px solid #272727;
    color: var(--white-color);
    border-radius: 50%;
}

.ur3-footer-social a:hover {
    color: var(--secondary-color);
}

.ur3-footer-social a:hover i {
    -webkit-animation: 0.4s toTopFromBottom forwards;
    animation: 0.4s toTopFromBottom forwards;
}

.ur3-newsletter-box {
    padding: 60px 0;
    border-top: 1px solid var(--ur3-stroke);
    border-bottom: 1px solid var(--ur3-stroke);
}

.ur3-newsletter-content {
    max-width: 370px;
}

.ur3-footer-copyright {
    padding: 46px 0;
}

/****************** offcanvus start **************/

.offcanvus-box {
    width: 425px;
    z-index: 100;
    top: 0;
    right: -430px;
    height: 100vh;
    overflow-y: scroll;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.offcanvus-box.active {
    right: 0;
}

.offcanvus-box .offcanvus-close {
    position: absolute;
    left: 30px;
    top: 30px;
    color: var(--primary-color);
}

.offcanvus-box .offcanvus-close:hover {
    color: var(--secondary-color);
}

.offcanvus-box .content-top {
    text-align: center;
    padding: 120px 60px 100px;
}

.offcanvus-box .content-top p {
    line-height: 26px;
}

.offcanvus-box .offcanvus-gallery {
    padding: 0 40px;
    gap: 10px;
}

.offcanvus-box .offcanvus-gallery a {
    width: calc(33% - 6px);
    overflow: hidden;
}

.offcanvus-box .offcanvus-gallery a img {
    max-width: 100%;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.offcanvus-box .offcanvus-gallery a img:hover {
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
}

.offcanvus-box .offcanvus-newsletter {
    padding: 100px 40px;
}

.offcanvus-box .offcanvus-bottom {
    border-top: 1px solid var(--gray-color);
    padding: 20px 40px;
}

.offcanvus-box .user-links a {
    color: var(--primary-color);
}

.offcanvus-box .user-links a:hover {
    color: var(--secondary-color);
}

.language-switcher button {
    font-size: 15px;
}

.language-switcher button img {
    margin-right: 8px;
}

.language-switcher .dropdown-menu {
    border-radius: 0;
    border-color: var(--gray-color);
}

.language-switcher .dropdown-menu li+li {
    border-top: 1px solid var(--light-color);
}

.language-switcher .dropdown-menu li a {
    padding: 4px 12px;
    display: block;
    color: var(--primary-color);
    font-size: 15px;
}

.language-switcher .dropdown-menu li a img {
    margin-right: 8px;
    max-width: 29px;
}

/************************ mobile menu start ****************/

.mobile-menu {
    width: 300px;
    height: 100vh;
    position: fixed;
    top: 0;
    left: -310px;
    background-color: var(--white-color);
    z-index: 60;
    padding: 60px 24px;
    overflow-y: scroll;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.mobile-menu .close {
    position: absolute;
    right: 20px;
    top: 20px;
    color: var(--primary-color);
}

.mobile-menu .close:hover {
    color: var(--secondary-color);
}

.mobile-menu .logo {
    width: 100%;
    display: block;
    background-color: var(--primary-color);
    text-align: center;
}

.mobile-menu .mobile-nav-menu {
    margin-top: 32px;
}

.mobile-menu .mobile-nav-menu li {
    display: block;
}

.mobile-menu .mobile-nav-menu li+li {
    border-top: 1px solid var(--light-stroke);
}

.mobile-menu .mobile-nav-menu li a {
    display: block;
    color: var(--primary-color);
    padding: 10px 0;
}

.mobile-menu .mobile-nav-menu li.has-submenu {
    position: relative;
}

.mobile-menu .mobile-nav-menu li.has-submenu>i {
    position: absolute;
    right: 0;
    top: 6px;
    padding: 8px;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.mobile-menu .mobile-nav-menu li.has-submenu>i.icon-rotate {
    -webkit-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg);
}

.mobile-menu .mobile-nav-menu li.has-submenu>.submenu-wrapper {
    padding-left: 15px;
    display: none;
}

.mobile-menu .mobile-search input {
    width: 100%;
}

.mobile-menu .mobile-search button span {
    padding: 0;
    width: 50px;
    height: 50px;
}

.mobile-menu.active {
    left: 0;
}

.ur-search-form {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100vh;
    background-color: var(--primary-overlay);
    z-index: 100;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    opacity: 0;
    visibility: hidden;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur-search-form .close {
    position: absolute;
    right: 24px;
    top: 24px;
    font-size: 18px;
    color: var(--white-color);
}

.ur-search-form .close:hover {
    color: var(--secondary-color);
}

.ur-search-form form {
    background-color: var(--white-color);
}

.ur-search-form form input {
    background-color: var(--white-color);
}

.ur-search-form form button {
    border-left: 1px solid var(--light-stroke);
    width: 60px;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
    font-weight: 700;
}

.ur-search-form form button:hover {
    color: var(--secondary-color);
}

.ur-search-form.active {
    opacity: 1;
    visibility: visible;
}

/************** header cart box *************/

.cart-drawer {
    top: 0;
    right: -390px;
    background-color: var(--white-color);
    z-index: 200;
    width: 380px;
    height: 100vh;
    padding: 30px;
    -webkit-box-shadow: var(--box-shadow);
    box-shadow: var(--box-shadow);
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
}

.cart-drawer .cart-list {
    margin-top: 100px;
    max-height: calc(100vh - 100px);
    overflow-y: scroll;
    padding-bottom: 15px;
}

.cart-drawer .cart-list::-webkit-scrollbar {
    display: none;
}

.cart-drawer li+li {
    margin-top: 20px;
}

.cart-drawer .feature-image {
    max-width: 90px;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    padding: 10px;
}

.cart-drawer .feature-image img {
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.cart-drawer .feature-image:hover img {
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05);
}

.cart-drawer h6 {
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.cart-drawer h6:hover {
    color: var(--secondary-color);
}

.cart-drawer .quantity input {
    max-width: 50px;
    border: 1px solid var(--light-stroke);
    padding: 4px;
    text-align: center;
}

.cart-drawer .quantity .step-btns {
    width: 30px;
    height: 34px;
    border: 1px solid var(--light-stroke);
    border-left: 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    position: relative;
}

.cart-drawer .quantity .step-btns::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    width: 100%;
    height: 1px;
    background-color: var(--light-stroke);
}

.cart-drawer .quantity .step-btns button {
    font-size: 10px;
    padding: 0;
    display: block;
}

.cart-drawer .close {
    font-size: 14px;
    color: var(--text-color);
}

.cart-drawer .close:hover {
    color: var(--secondary-color);
}

.cart-drawer .drawer-close {
    font-size: 15px;
    color: var(--primary-color);
}

.cart-drawer .drawer-close:hover {
    color: var(--secondary-color);
}

.cart-drawer.active {
    right: 0;
}

@media (max-width: 460px) {
    .cart-drawer {
        width: 360px;
    }
}

.ur-icon-box h6 {
    font-size: 16px;
}

.ur-icon-box span {
    color: var(--text-color);
}

/****************** banner components ****************/

.ur2-banner-box {
    padding: 160px 100px;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center right;
}

.ur2-banner-box .ur2-banner-title {
    font-size: 80px;
    line-height: 1.1em;
}

@media (max-width: 1600px) {
    .ur2-banner-box .ur2-banner-title {
        font-size: 70px;
    }
}

@media (max-width: 1399.98px) {
    .ur2-banner-box .ur2-banner-title {
        font-size: 55px;
    }
}

@media (max-width: 991.98px) {
    .ur2-banner-box .ur2-banner-title {
        font-size: 48px;
    }
}

@media (max-width: 767.98px) {
    .ur2-banner-box {
        padding: 130px 80px;
    }
}

@media (max-width: 575.98px) {
    .ur2-banner-box {
        padding: 120px 24px;
    }
}

.breadcrumb-section {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center right;
}

.breadcrumb-text a {
    margin-right: 4px;
    color: var(--text-color);
    display: inline-block;
}

.breadcrumb-text a:hover {
    color: var(--secondary-color);
}

.breadcrumb-text span {
    margin-left: 4px;
}

.sidebar-widget .widget-title::before {
    content: '';
    position: absolute;
    left: 0;
    bottom: -15px;
    width: 50px;
    height: 1px;
    background-color: var(--primary-color);
}

.sidebar-widget .sidebar-check-fields li {
    display: block;
}

.sidebar-widget .sidebar-check-fields li label {
    position: relative;
    display: block;
}

.sidebar-widget .sidebar-check-fields li label>span {
    padding-left: 32px;
    display: block;
    position: relative;
    font-weight: 300;
}

.sidebar-widget .sidebar-check-fields li label>span::before {
    content: '\f00c';
    font-family: 'FontAwesome';
    font-size: 12px;
    text-align: center;
    line-height: 17px;
    position: absolute;
    left: 0;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    width: 18px;
    height: 18px;
    border: 1px solid var(--border-gray);
    color: transparent;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.sidebar-widget .sidebar-check-fields li label>span span {
    float: right;
}

.sidebar-widget .sidebar-check-fields li label input {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
}

.sidebar-widget .sidebar-check-fields li label input:checked~span::before {
    background-color: var(--primary-color);
    color: var(--white-color);
    border-color: var(--primary-color);
}

.sidebar-widget .sidebar-check-fields li+li {
    margin-top: 18px;
}

.sidebar-widget .color-select li label {
    position: relative;
    display: block;
}

.sidebar-widget .color-select li label>span {
    padding-left: 32px;
    display: block;
    font-weight: 300;
    position: relative;
}

.sidebar-widget .color-select li label>span::before {
    content: '\f00c';
    font-family: 'FontAwesome';
    color: transparent;
    font-size: 12px;
    text-align: center;
    line-height: 20px;
    position: absolute;
    left: 0;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    width: 20px;
    height: 20px;
    border-radius: 50%;
}

.sidebar-widget .color-select li label>span span {
    float: right;
}

.sidebar-widget .color-select li label>span.bg-soft-gold::before {
    background-color: #EB9A3C;
}

.sidebar-widget .color-select li label>span.bg-light-pink::before {
    background-color: #FAA9D9;
}

.sidebar-widget .color-select li label>span.bg-green-touch::before {
    background-color: #99C88D;
}

.sidebar-widget .color-select li label>span.bg-navy-blue::before {
    background-color: #A9BFFA;
}

.sidebar-widget .color-select li label>span.bg-gray-white::before {
    background-color: #EEEACA;
}

.sidebar-widget .color-select li label input {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
}

.sidebar-widget .color-select li label input:checked~span::before {
    color: var(--white-color);
}

.sidebar-widget .color-select li+li {
    margin-top: 18px;
}

.products-widget .sidebar-products li .thumbnail {
    max-width: 90px;
}

.products-widget .sidebar-products li+li {
    margin-top: 24px;
}

.filter-widget .ur-pricing-range {
    border: 0;
    background-color: var(--border-gray);
    height: 5px;
}

.filter-widget .ur-pricing-range .ui-slider-range {
    background-color: var(--secondary-color);
}

.filter-widget .ur-pricing-range .ui-slider-handle {
    width: 15px;
    height: 15px;
    border: 2px solid var(--secondary-color);
    border-radius: 0;
    background-color: var(--white-color);
    padding: 0;
    outline: 0;
}

.filter-widget .ur-pricing-range .ui-slider-handle::before {
    content: '';
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    width: 5px;
    height: 5px;
    background-color: var(--secondary-color);
}

.filter-widget p {
    font-weight: 300;
}

.filter-widget input {
    border: 0;
    font-weight: 300;
}

.filter-widget .submit-btn {
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.filter-widget .submit-btn:hover {
    color: var(--secondary-color);
}

.latest-post-widget .latest-posts li+li {
    margin-top: 25px;
}

.latest-post-widget .latest-posts .feature-image {
    width: 90px;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    overflow: hidden;
}

.latest-post-widget .latest-posts .feature-image img {
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.latest-post-widget .latest-posts .feature-image img:hover {
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05);
}

.latest-post-widget .latest-posts h6 {
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.latest-post-widget .latest-posts h6:hover {
    color: var(--secondary-color);
}

.tags-widget .tags {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    gap: 12px;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}

.tags-widget .tags a {
    display: inline-block;
    padding: 10px 22px;
    border: 1px solid var(--light-stroke);
    font-size: 14px;
    text-transform: uppercase;
    font-weight: 400;
    color: var(--primary-color);
}

.tags-widget .tags a:hover {
    color: var(--white-color);
    background-color: var(--primary-color);
}

.instagram-widget .insta-posts {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    gap: 15px;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}

.instagram-widget .insta-posts li {
    width: calc(33% - 10px);
    overflow: hidden;
}

.instagram-widget .insta-posts li img {
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.instagram-widget .insta-posts li img:hover {
    -webkit-transform: scale(1.08);
    -ms-transform: scale(1.08);
    transform: scale(1.08);
}

.template-pagination li a {
    display: inline-block;
    background-color: var(--light-color);
    padding: 9px 12px;
    color: var(--primary-color);
    font-size: 14px;
}

.template-pagination li a:hover {
    background-color: var(--primary-color);
    color: var(--white-color);
}

.template-pagination li a.active {
    background-color: var(--primary-color);
    color: var(--white-color);
}

/**************** order tracking form *************/

.theme-form {
    padding: 40px;
    border: 1px solid var(--light-stroke);
}

.theme-form label {
    font-size: 18px;
    color: var(--primary-color);
    margin-bottom: 20px;
    display: block;
}

.theme-form .theme-input {
    width: 100%;
    display: block;
    background-color: transparent;
    border: 1px solid var(--light-stroke);
    font-weight: 300;
}

.theme-form .theme-input:focus {
    border-color: var(--primary-color);
}

@media (max-width: 575.98px) {
    .theme-form {
        padding: 30px;
    }
}

.help-box {
    border: 1px solid var(--light-stroke);
    padding: 32px 40px;
}

#product_quickview .modal-dialog {
    max-width: 1400px;
}

#product_quickview .modal-dialog .modal-content {
    padding: 32px;
    position: relative;
}

#product_quickview .modal-dialog .modal-content .btn-close {
    position: absolute;
    right: 10px;
    top: 10px;
    outline: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
}

#product_quickview .modal-dialog .modal-content .feature-image {
    height: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    padding: 48px;
}

@media (max-width: 1399.98px) {
    #product_quickview .modal-dialog {
        max-width: 1200px;
    }
    #product_quickview .modal-dialog .modal-content .feature-image {
        min-height: 450px;
    }
    #product_quickview .modal-dialog .modal-content .single-product-info {
        margin-top: 32px;
    }
}

@media (max-width: 1199.98px) {
    #product_quickview .modal-dialog {
        max-width: 900px;
    }
}

@media (max-width: 991.98px) {
    #product_quickview .modal-dialog {
        max-width: 700px;
    }
}

@media (max-width: 575.98px) {
    #product_quickview .modal-dialog .modal-content .feature-image {
        min-height: 300px;
    }
}

/****************************** page styles ******************************/

/********************** hero section start **********************/

.ur-hero-section {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    padding-top: 40px;
}

.ur-hero-section .circle-white {
    width: 1090px;
    height: 1090px;
    background-color: var(--white-color);
    right: -60px;
    bottom: -380px;
}

@media (max-width: 1399.98px) {
    .ur-hero-section .circle-white {
        width: 900px;
        height: 900px;
    }
    .ur-hero-section .circle-color {
        max-width: 750px;
    }
}

@media (max-width: 1199.98px) {
    .ur-hero-section {
        padding-top: 100px;
    }
}

@media (max-width: 460px) {
    .ur-hero-section .circle-color {
        display: none;
    }
}

.hero-title {
    font-size: 100px;
    line-height: 110px;
}

@media (max-width: 1399.98px) {
    .hero-title {
        font-size: 90px;
        line-height: 1.2em;
    }
}

@media (max-width: 575.98px) {
    .hero-title {
        font-size: 70px;
    }
}

@media (max-width: 460px) {
    .hero-title {
        font-size: 60px;
    }
}

.ur-hero-slider {
    width: 1400px;
}

.ur-hero-slider .slick-slide.slick-active .hero-subtitle {
    -webkit-animation: 1s theme_fadeInUp;
    animation: 1s theme_fadeInUp;
}

.ur-hero-slider .slick-slide.slick-active .hero-title {
    -webkit-animation: 1.2s theme_fadeInUp;
    animation: 1.2s theme_fadeInUp;
}

.ur-hero-slider .slick-slide.slick-active .template-btn {
    -webkit-animation: 1.5s theme_fadeInUp;
    animation: 1.5s theme_fadeInUp;
}

.ur-hero-slider .slick-dots {
    text-align: center;
    width: 40px;
    position: absolute;
    left: -140px;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
}

.ur-hero-slider .slick-dots li {
    display: block;
    line-height: 0;
}

.ur-hero-slider .slick-dots li+li {
    margin-top: 20px;
}

.ur-hero-slider .slick-dots li button {
    width: 22px;
    height: 2px;
    background-color: var(--primary-color);
    opacity: 0.2;
    font-size: 0;
    padding: 0;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur-hero-slider .slick-dots li.slick-active button {
    opacity: 1;
    width: 40px;
}

.ur-hero-slider .prev-arrow,
.ur-hero-slider .next-arrow {
    position: absolute;
    left: -132px;
    font-size: 15px;
}

.ur-hero-slider .prev-arrow {
    top: 43%;
}

.ur-hero-slider .next-arrow {
    bottom: 43%;
}

@media (max-width: 1600px) {
    .ur-hero-slider .slick-dots {
        left: -70px;
    }
    .ur-hero-slider .prev-arrow,
    .ur-hero-slider .next-arrow {
        left: -64px;
    }
}

@media (max-width: 1399.98px) {
    .ur-hero-slider {
        width: 100%;
    }
}

@media (max-width: 1260px) {
    .ur-hero-slider .slick-dots {
        display: none;
    }
    .ur-hero-slider .prev-arrow,
    .ur-hero-slider .next-arrow {
        display: none;
    }
}

/********************* newsletter section *****************/

.newsletter-form {
    padding: 7px;
    border: 1px solid var(--border-gray);
}

.newsletter-form input {
    width: 100%;
    background-color: transparent;
    border: 0;
    padding-left: 22px;
    font-weight: 300;
}

.newsletter-form input::-webkit-input-placeholder {
    color: var(--primary-color);
}

.newsletter-form input:-ms-input-placeholder {
    color: var(--primary-color);
}

.newsletter-form input::-ms-input-placeholder {
    color: var(--primary-color);
}

.newsletter-form input::placeholder {
    color: var(--primary-color);
}

.newsletter-form .primary-btn {
    -ms-flex-negative: 0;
    flex-shrink: 0;
}

.newsletter-form .primary-btn span {
    padding: 14px 42px;
}

/************************** category slider start **************************/

.slider-spacing .slick-list {
    margin: 0 -12px;
}

.slider-spacing .slick-list .slick-slide {
    margin: 0 12px;
}

/*********************** ticker section start ******************/

.ur-ticker-wrapper {
    -webkit-box-sizing: content-box;
    box-sizing: content-box;
    width: 100%;
    padding-left: 100%;
}

.ur-ticker-wrapper .ur-ticker {
    display: inline-block;
    white-space: nowrap;
    padding: 26px 0;
    -webkit-animation: 30s ticker linear infinite;
    animation: 30s ticker linear infinite;
    -webkit-box-sizing: content-box;
    box-sizing: content-box;
    padding-right: 100%;
    color: #ffffff85;
}

.ur-ticker-wrapper .ur-ticker span {
    font-size: 18px;
    font-weight: 500;
    position: relative;
    display: inline-block;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur-ticker-wrapper .ur-ticker span+span {
    margin-left: 120px;
}

.ur-ticker-wrapper .ur-ticker span+span::before {
    content: '';
    position: absolute;
    left: -80px;
    width: 40px;
    height: 1px;
    background-color: var(--white-color);
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur-ticker-wrapper .ur-ticker span:hover {
    -webkit-transform: translateY(-6px);
    -ms-transform: translateY(-6px);
    transform: translateY(-6px);
}

.ur-ticker-wrapper .ur-ticker span:hover::before {
    top: calc(50% + 6px);
}

.ur-ticker-wrapper .ur-ticker:hover {
    -webkit-animation-play-state: paused;
    animation-play-state: paused;
}

/************************* call to action start *****************/

.ur-cta-section .bg-shape {
    width: 1600px;
    height: 500px;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}

.ur-cta-section .shape-image {
    right: -125px;
    bottom: 120px;
}

@media (max-width: 767.98px) {
    .ur-cta-section .bg-shape {
        display: none;
    }
}

.ur-cta-content h2 {
    line-height: 70px;
}

.ur-cta-content h6 {
    line-height: 1.5em;
}

@media (max-width: 1199.98px) {
    .ur-cta-content h2 {
        line-height: 1.2em;
    }
}

/************************* featured product slider ***********************/

.feature-product-slider .prev-arrow,
.feature-product-slider .next-arrow {
    position: absolute;
    right: -6px;
    top: -90px;
    font-size: 14px;
    color: var(--text-color);
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.feature-product-slider .prev-arrow:hover,
.feature-product-slider .next-arrow:hover {
    color: var(--primary-color);
}

.feature-product-slider .prev-arrow {
    right: 25px;
}

.feature-product-slider .prev-arrow::after {
    content: '';
    width: 1px;
    height: 16px;
    background-color: var(--primary-color);
    position: absolute;
    right: -6px;
    opacity: 0.2;
}

@media (max-width: 575.98px) {
    .feature-product-slider .prev-arrow,
    .feature-product-slider .next-arrow {
        right: auto;
        bottom: -60px;
        top: auto;
    }
    .feature-product-slider .prev-arrow {
        right: auto;
        left: calc(50% - 20px);
    }
    .feature-product-slider .next-arrow {
        left: calc(50% + 14px);
    }
}

/************************ brand slider start **********************/

.ur-brand-slider .slick-track {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}

.ur-brand-single:hover img {
    -webkit-animation: 0.4s toTopFromBottom forwards;
    animation: 0.4s toTopFromBottom forwards;
}

/*********************** blog section start *********************/

.ur-blog-card .feature-image {
    position: relative;
}

.ur-blog-card .feature-image img {
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur-blog-card .feature-image::before {
    content: '';
    position: absolute;
    top: 0;
    left: -75%;
    z-index: 2;
    display: block;
    width: 50%;
    height: 100%;
    background: -webkit-gradient(linear, left top, right top, from(rgba(255, 255, 255, 0)), to(rgba(255, 255, 255, 0.3)));
    background: -webkit-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.3) 100%);
    background: -o-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.3) 100%);
    background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.3) 100%);
    -webkit-transform: skewX(-25deg);
    -ms-transform: skewX(-25deg);
    transform: skewX(-25deg);
}

.ur-blog-card .explore-btn {
    font-size: 14px;
    font-weight: 400;
    color: var(--primary-color);
    text-transform: uppercase;
    text-decoration: underline;
}

.ur-blog-card .explore-btn:hover {
    color: var(--secondary-color);
}

.ur-blog-card h4 {
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur-blog-card h4:hover {
    color: var(--secondary-color);
}

.ur-blog-card:hover .feature-image img {
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
}

.ur-blog-card:hover .feature-image::before {
    -webkit-animation: 0.75s shine;
    animation: 0.75s shine;
}

/************************* feedback section start **********************/

.feedback-section {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
}

@media (max-width: 1399.98px) {
    .feedback-section .neaklace-shape {
        max-width: 190px;
    }
}

.ur-feedback-slider .slick-dots {
    margin-top: 40px;
}

.ur-feedback-slider .slick-dots li {
    width: 21px;
    height: 21px;
    border: 1px solid transparent;
    border-radius: 50%;
    display: inline-block;
    padding: 5px;
    margin-right: 6px;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur-feedback-slider .slick-dots li button {
    width: 100%;
    height: 100%;
    background-color: var(--white-color);
    border-radius: 50%;
    padding: 0;
    font-size: 0;
    display: block;
}

.ur-feedback-slider .slick-dots li.slick-active {
    border-color: var(--white-color);
}

.ur-feedback-single p {
    font-size: 18px;
    color: var(--text-color);
}

/******************* deal section start *******************/

.deal-section {
    padding: 180px 0;
}

.deal-section .dark-overlay {
    width: calc(100% - 120px);
    height: calc(100% - 120px);
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    background-color: var(--border-dark);
    z-index: -1;
}

@media (max-width: 1399.98px) {
    .deal-section {
        padding: 120px 0;
    }
}

@media (max-width: 767.98px) {
    .deal-section {
        padding: 70px 0;
    }
}

.ur-tab-control {
    display: block;
}

.ur-tab-control li {
    display: block;
}

.ur-tab-control li+li {
    margin-top: 32px;
}

.ur-tab-control li a {
    font-size: 24px;
    font-weight: 300;
    color: var(--white-color);
    position: relative;
}

.ur-tab-control li a::before {
    content: '';
    position: absolute;
    left: 0;
    width: 0;
    height: 1px;
    background-color: var(--secondary-color);
    bottom: 7px;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur-tab-control li a.active {
    padding-left: 70px;
    color: var(--secondary-color);
}

.ur-tab-control li a.active::before {
    width: 40px;
}

/*************************** instagram slider start *******************/

.instagram-slide-single .item-overlay {
    width: 100%;
    height: 100%;
    overflow: hidden;
    background-color: rgba(0, 0, 0, 0.6);
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    position: absolute;
    left: 0;
    top: 0;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.instagram-slide-single .item-overlay i {
    width: 50px;
    height: 50px;
    background-color: var(--white-color);
    border-radius: 50%;
    text-align: center;
    line-height: 50px;
    color: var(--secondary-color);
    font-size: 18px;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.instagram-slide-single .item-overlay i:hover {
    -webkit-transform: translateY(-10px);
    -ms-transform: translateY(-10px);
    transform: translateY(-10px);
}

.instagram-slider .prev-arrow,
.instagram-slider .next-arrow {
    position: absolute;
    width: 350px;
    height: 330px;
    z-index: 2;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    opacity: 0;
}

.instagram-slider .prev-arrow {
    left: 40px;
}

.instagram-slider .next-arrow {
    right: 40px;
}

.instagram-slider .slick-slide {
    -webkit-transform: scale(0.8);
    -ms-transform: scale(0.8);
    transform: scale(0.8);
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.instagram-slider .slick-slide .instagram-slide-single .item-overlay {
    width: 0;
    right: 0;
    left: auto;
}

.instagram-slider .slick-slide.slick-center {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
}

.instagram-slider .slick-slide.slick-center .instagram-slide-single .item-overlay {
    left: 0;
    right: auto;
    width: 100%;
}

@media (max-width: 1399.98px) {
    .instagram-slider .prev-arrow,
    .instagram-slider .next-arrow {
        width: 290px;
        height: 280px;
    }
}

@media (max-width: 1199.98px) {
    .instagram-slider .prev-arrow,
    .instagram-slider .next-arrow {
        width: 240px;
        height: 230px;
    }
}

@media (max-width: 991.98px) {
    .instagram-slider .prev-arrow,
    .instagram-slider .next-arrow {
        width: 170px;
        height: 170px;
    }
    .instagram-slider .prev-arrow {
        left: 30px;
    }
    .instagram-slider .next-arrow {
        right: 30px;
    }
}

@media (max-width: 767.98px) {
    .instagram-slider .prev-arrow,
    .instagram-slider .next-arrow {
        display: none;
    }
    .instagram-slider .slick-list {
        margin: 0 -12px;
    }
    .instagram-slider .slick-slide {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
        margin: 0 12px;
    }
    .instagram-slider .slick-slide .instagram-slide-single:hover .item-overlay {
        left: 0;
        right: auto;
        width: 100%;
    }
}

/************** hero section *****************/

.ur2-hero-section {
    background-size: 0;
    background-repeat: no-repeat;
    background-position: center center;
    z-index: 1;
}

.ur2-hero-section::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: var(--primary-light-overlay);
    z-index: -1;
    display: none;
}

.ur2-hero-section .banner-1 {
    -webkit-animation: 1.1s theme_fadeInUp;
    animation: 1.1s theme_fadeInUp;
}

.ur2-hero-section .banner-2 {
    -webkit-animation: 1.2s theme_fadeInUp;
    animation: 1.2s theme_fadeInUp;
}

.ur2-hero-section .banner-3 {
    -webkit-animation: 1.5s theme_fadeInUp;
    animation: 1.5s theme_fadeInUp;
}

@media (max-width: 1199.98px) {
    .ur2-hero-section {
        background-size: cover;
        padding: 350px 0;
    }
    .ur2-hero-section::before {
        display: block;
    }
}

@media (max-width: 767.98px) {
    .ur2-hero-section {
        padding: 225px 0 250px 0;
    }
}

.ur2-hero-content {
    gap: 140px;
}

.ur2-hero-social {
    position: absolute;
    left: 12px;
    bottom: 80px;
    gap: 24px;
}

.ur2-hero-social a {
    font-size: 14px;
    font-weight: 300;
    color: var(--primary-color);
    text-transform: uppercase;
    position: relative;
}

.ur2-hero-social a::before {
    content: '';
    position: absolute;
    right: 0;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    width: 0;
    height: 1px;
    background-color: var(--primary-color);
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur2-hero-social a:hover::before {
    right: auto;
    left: 0;
    width: 100%;
}

@media (max-width: 1199.98px) {
    .ur2-hero-social {
        bottom: -200px;
        left: 50%;
        -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        transform: translateX(-50%);
    }
    .ur2-hero-social a {
        color: var(--white-color);
    }
}

@media (max-width: 767.98px) {
    .ur2-hero-social {
        bottom: -170px;
    }
}

.ur2-hero-text {
    position: absolute;
    left: 0;
    top: 54%;
    width: 100%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    text-align: center;
}

.ur2-hero-text h1 {
    font-size: 120px;
    text-align: right;
}

.ur2-hero-text h1 span {
    color: var(--white-color);
    margin: 0 100px;
}

.ur2-hero-text>.title {
    position: relative;
    color: var(--white-color);
    text-transform: capitalize;
    display: inline-block;
    font-weight: 300;
    text-transform: uppercase;
}

.ur2-hero-text>.title::before {
    content: '';
    position: absolute;
    right: calc(100% + 10px);
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    width: 253px;
    height: 1px;
    background-color: var(--white-color);
}

.ur2-hero-text>.title::after {
    content: '';
    position: absolute;
    left: calc(100% + 10px);
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    width: 253px;
    height: 1px;
    background-color: var(--white-color);
}

@media (max-width: 1600px) {
    .ur2-hero-text h1 {
        font-size: 110px;
    }
}

@media (max-width: 1460px) {
    .ur2-hero-text h1 {
        font-size: 100px;
    }
}

@media (max-width: 1399.98px) {
    .ur2-hero-text h1 span {
        margin: 0 50px;
    }
}

@media (max-width: 1260px) {
    .ur2-hero-text h1 span {
        margin: 0;
    }
}

@media (max-width: 1199.98px) {
    .ur2-hero-text h1 {
        text-align: center;
        color: var(--white-color);
    }
}

@media (max-width: 767.98px) {
    .ur2-hero-text h1 {
        font-size: 60px;
    }
    .ur2-hero-text>.title::before {
        width: 60px;
    }
    .ur2-hero-text>.title::after {
        width: 60px;
    }
}

@media (max-width: 460px) {
    .ur2-hero-text h1 {
        font-size: 50px;
    }
}

/*************** category section ************/

.ur2-ct-box {
    border-radius: 30px;
    overflow: hidden;
    background-color: var(--white-color);
    border: 1px solid var(--gray-100);
    -webkit-box-shadow: var(--box-shadow);
    box-shadow: var(--box-shadow);
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
    position: relative;
    z-index: 1;
}

.ur2-ct-box::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 0;
    background-color: var(--secondary-color);
    -webkit-transition: 0.5s;
    -o-transition: 0.5s;
    transition: 0.5s;
    z-index: -1;
}

.ur2-ct-box .feature-image {
    border-radius: 30px;
}

.ur2-ct-box .feature-image img {
    border-radius: 30px;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur2-ct-box h4 {
    font-size: 22px;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur2-ct-box span {
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur2-ct-box:hover {
    -webkit-transform: translateY(-10px);
    -ms-transform: translateY(-10px);
    transform: translateY(-10px);
    background-color: var(--secondary-color);
}

.ur2-ct-box:hover::after {
    height: 50%;
}

.ur2-ct-box:hover h4 {
    color: var(--white-color);
}

.ur2-ct-box:hover span {
    color: var(--white-color);
}

.ur2-ct-box:hover .feature-image img {
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
}

@media (max-width: 1199.98px) {
    .ur2-ct-box {
        width: calc(33% - 14px);
    }
}

@media (max-width: 991.98px) {
    .ur2-ct-box {
        width: calc(33% - 15px);
    }
}

@media (max-width: 767.98px) {
    .ur2-ct-box {
        width: calc(50% - 15px);
    }
}

@media (max-width: 400px) {
    .ur2-ct-box {
        width: auto;
        max-width: 360px;
    }
}

/**************** feedback section start **************/

.ur2-feedback-slider {
    max-width: 1010px;
    margin: 0 auto;
    position: relative;
}

.ur2-feedback-slider .prev-arrow,
.ur2-feedback-slider .next-arrow {
    position: absolute;
    top: calc(50% + 40px);
    color: var(--text-color);
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur2-feedback-slider .prev-arrow svg path,
.ur2-feedback-slider .next-arrow svg path {
    fill: var(--text-color);
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur2-feedback-slider .prev-arrow:hover,
.ur2-feedback-slider .next-arrow:hover {
    color: var(--primary-color);
}

.ur2-feedback-slider .prev-arrow:hover svg path,
.ur2-feedback-slider .next-arrow:hover svg path {
    fill: var(--primary-color);
}

.ur2-feedback-slider .prev-arrow {
    left: -115px;
}

.ur2-feedback-slider .next-arrow {
    right: -115px;
}

@media (max-width: 1399.98px) {
    .ur2-feedback-slider .prev-arrow {
        left: -80px;
    }
    .ur2-feedback-slider .next-arrow {
        right: -80px;
    }
}

@media (max-width: 1199.98px) {
    .ur2-feedback-slider {
        padding-bottom: 60px;
    }
    .ur2-feedback-slider .prev-arrow,
    .ur2-feedback-slider .next-arrow {
        top: auto;
        bottom: -40px;
    }
    .ur2-feedback-slider .prev-arrow {
        left: calc(50% - 60px);
    }
    .ur2-feedback-slider .next-arrow {
        right: calc(50% - 60px);
    }
}

@media (max-width: 767.98px) {
    .ur2-feedback-slider .prev-arrow,
    .ur2-feedback-slider .next-arrow {
        bottom: 0;
    }
}

@media (max-width: 767.98px) {
    .ur2-feedback-single h2 {
        font-size: 24px;
        line-height: 1.5em;
    }
}

@media (max-width: 400px) {
    .ur2-feedback-single h2 {
        font-size: 20px;
    }
}

.ur2-blog-card {
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur2-blog-card .blog-author {
    background-color: var(--primary-color);
    color: var(--white-color);
    padding: 4px 20px;
}

.ur2-blog-card .feature-image {
    position: relative;
}

.ur2-blog-card .feature-image::before {
    content: '';
    position: absolute;
    top: 0;
    left: -76%;
    z-index: 2;
    display: block;
    width: 50%;
    height: 100%;
    background: -webkit-gradient(linear, left top, right top, from(rgba(255, 255, 255, 0)), to(rgba(255, 255, 255, 0.3)));
    background: -webkit-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.3) 100%);
    background: -o-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.3) 100%);
    background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.3) 100%);
    -webkit-transform: skewX(-25deg);
    -ms-transform: skewX(-25deg);
    transform: skewX(-25deg);
}

.ur2-blog-card .feature-image img {
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur2-blog-card h4 {
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur2-blog-card h4:hover {
    color: var(--secondary-color);
}

.ur2-blog-card .explore-btn {
    color: var(--primary-color);
    text-decoration: underline;
    text-transform: uppercase;
}

.ur2-blog-card .explore-btn:hover {
    color: var(--secondary-color);
}

.ur2-blog-card:hover .feature-image img {
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
}

.ur2-blog-card:hover .feature-image::before {
    -webkit-animation: 0.75s shine;
    animation: 0.75s shine;
}

.ur-instagram-slider {
    max-width: calc(100% - 80px);
    margin: 0 auto;
}

.ur-instagram-post {
    overflow: hidden;
}

.ur-instagram-post img {
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
}

.ur-instagram-post .post-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    background-color: var(--primary-light-overlay);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-transform: scale(0.7);
    -ms-transform: scale(0.7);
    transform: scale(0.7);
    opacity: 0;
    visibility: hidden;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur-instagram-post .post-overlay p {
    font-size: 24px;
    text-align: center;
    padding: 0 30px;
}

.ur-instagram-post .post-overlay .explore-btn {
    bottom: 60px;
    width: 50px;
    height: 50px;
    background-color: var(--white-color);
    color: var(--secondary-color);
    border-radius: 50%;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
}

.ur-instagram-post .post-overlay .explore-btn:hover {
    bottom: 65px;
    background-color: var(--primary-color);
    color: var(--white-color);
}

.ur-instagram-post:hover img {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
}

.ur-instagram-post:hover .post-overlay {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    opacity: 1;
    visibility: visible;
}

@media (max-width: 767.98px) {
    .ur-instagram-post .post-overlay p {
        font-size: 20px;
    }
}

/********************** offer section start *******************/

.ur2-offer-section .overlay-shape {
    background-repeat: no-repeat;
    background-size: cover;
    opacity: 0.15;
}

@media (max-width: 1600px) {
    .ur2-offer-section .image-shape {
        display: none;
    }
}

@media (max-width: 1199.98px) {
    .ur2-offer-section .offer-product-banner {
        display: none;
    }
}

.offer-product-banner {
    width: 40%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
}

.offer-product-banner .save-badge {
    position: absolute;
    top: 80px;
    left: 80px;
    width: 100px;
    height: 100px;
    background-color: var(--secondary-color);
    border-radius: 50%;
    color: var(--white-color);
    font-size: 20px;
    font-weight: 400;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    text-align: center;
    line-height: 1.3em;
}

.offer-countdown {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    gap: 60px;
}

.offer-countdown li {
    display: inline-block;
    position: relative;
}

.offer-countdown li .title {
    font-size: 60px;
    color: var(--secondary-color);
    font-weight: 600;
    display: block;
}

.offer-countdown li .subtitle {
    display: block;
    color: var(--white-color);
    text-transform: uppercase;
}

.offer-countdown li+li::before {
    content: ":";
    position: absolute;
    left: -32px;
    top: 10px;
    color: var(--secondary-color);
    font-size: 40px;
}

@media (max-width: 575.98px) {
    .offer-countdown {
        gap: 40px;
    }
    .offer-countdown li .title {
        font-size: 36px;
    }
    .offer-countdown li+li::before {
        font-size: 32px;
        top: 0;
        left: -20px;
    }
}

.video-box {
    width: 100%;
    height: 550px;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
}

.video-box .template-video-btn {
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    z-index: 2;
}

.video-box .template-video-btn:hover {
    -webkit-transform: translate(-50%, -55%);
    -ms-transform: translate(-50%, -55%);
    transform: translate(-50%, -55%);
}

.about-mission-box {
    border-left: 1px solid var(--light-stroke);
    border-right: 1px solid var(--light-stroke);
    padding: 0 32px;
}

.ur2-accordion .accordion-item {
    border: 0;
    border-top: 1px solid var(--gray-color);
    border-bottom: 1px solid var(--gray-color);
    padding: 22px 0;
}

.ur2-accordion .accordion-item .accordion-header a {
    color: var(--primary-color);
}

.ur2-accordion .accordion-item+.accordion-item {
    border-top: 0;
}

.ab-feature-box {
    padding: 0 12px;
}

.ab-feature-box .icon-wrapper svg path {
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ab-feature-box p {
    color: #8D8D8D;
}

.ab-feature-box .explore-btn {
    color: var(--white-color);
    position: relative;
}

.ab-feature-box .explore-btn::before {
    content: '';
    position: absolute;
    left: 0;
    bottom: -1px;
    width: calc(100% - 24px);
    height: 1px;
    background-color: var(--white-color);
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ab-feature-box .explore-btn:hover::before {
    width: 0;
}

.ab-feature-box:hover .icon-wrapper svg path {
    fill: var(--secondary-color);
}

.ur-team-card img {
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur-team-card .team-social {
    padding: 22px 16px;
    background-color: var(--primary-color);
    text-align: center;
    position: absolute;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    gap: 15px;
    width: 100%;
    left: 0;
    bottom: -100px;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur-team-card .team-social a {
    width: 42px;
    height: 42px;
    border: 1px solid var(--border-dark);
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    color: var(--white-color);
    border-radius: 50%;
}

.ur-team-card .team-social a:hover {
    background-color: var(--white-color);
    color: var(--primary-color);
}

.ur-team-card:hover img {
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
}

.ur-team-card:hover .team-social {
    bottom: 0;
}

.layout-grid {
    padding: 8px 12px;
    gap: 12px;
    border: 1px solid var(--light-stroke);
}

.layout-grid a {
    opacity: 0.4;
}

.layout-grid a.active {
    opacity: 1;
}

.coupon-banner {
    padding: 60px 0 60px 60px;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: left bottom;
}

/***************** product single ***************/

.product-single-slider {
    gap: 20px;
}

@media (max-width: 767.98px) {
    .product-single-slider {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
    }
    .product-single-slider .product-nav-slider-wrapper {
        -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
        order: 2;
    }
    .product-single-slider .product-main-slider-wrapper {
        -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
        order: 1;
    }
}

.product-nav-slider-wrapper {
    width: 125px;
    -ms-flex-negative: 0;
    flex-shrink: 0;
}

.product-nav-slider-wrapper .feature-image {
    height: 100%;
}

.product-nav-slider-wrapper .product-nav-slider {
    height: 682px;
    overflow: hidden;
}

.product-nav-slider-wrapper .product-nav-slider .slick-slide+.slick-slide {
    margin-top: 15px;
}

@media (max-width: 767.98px) {
    .product-nav-slider-wrapper {
        width: 100%;
    }
    .product-nav-slider-wrapper .product-nav-slider {
        height: auto;
    }
    .product-nav-slider-wrapper .product-nav-slider .slick-list {
        margin: 0 -8px;
    }
    .product-nav-slider-wrapper .product-nav-slider .slick-list .slick-slide {
        margin: 0 8px;
    }
}

.product-main-slider-wrapper {
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.single-product-slider .feature-image {
    width: 100%;
    min-height: 680px;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    padding: 24px;
}

@media (max-width: 767.98px) {
    .single-product-slider .feature-image {
        min-height: auto;
    }
}

.single-product-info .pricing span {
    font-size: 22px;
}

.single-product-info .pricing span.pricing-devider {
    margin: 0 4px;
}

.single-product-info .short-description {
    padding: 24px 0;
    border-top: 1px solid var(--light-stroke);
    border-bottom: 1px solid var(--light-stroke);
}

.single-product-info .add_to_cart_btn {
    padding: 14px 32px;
    background-color: var(--primary-color);
    color: var(--white-color);
    border: 1px solid var(--primary-color);
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
    text-transform: uppercase;
}

.single-product-info .add_to_cart_btn svg path {
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.single-product-info .add_to_cart_btn:hover {
    background-color: transparent;
    border-color: var(--light-stroke);
    color: var(--primary-color);
}

.single-product-info .add_to_cart_btn:hover svg path {
    fill: var(--primary-color);
}

.single-product-info .wish_btn {
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
    text-transform: uppercase;
}

.single-product-info .wish_btn:hover {
    color: var(--secondary-color);
}

.single-product-info .product-meta li {
    color: var(--text-color);
}

.single-product-info .product-meta li+li {
    margin-top: 6px;
}

.single-product-features li {
    color: var(--primary-color);
}

.single-product-features li+li {
    margin-top: 16px;
}

.single-product-tab .nav {
    gap: 20px;
    border-bottom: 1px solid var(--light-stroke);
}

.single-product-tab .nav li a {
    font-size: 20px;
    color: var(--text-color);
    display: inline-block;
    padding: 6px 0;
}

.single-product-tab .nav li a.active {
    color: var(--primary-color);
}

.single-product-tab .video-content {
    width: 42%;
}

.single-product-tab .video-content .video-popup-btn {
    width: 102px;
    height: 102px;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    border: 1px solid var(--white-color);
    border-radius: 50%;
    color: var(--white-color);
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    z-index: 1;
    font-size: 30px;
}

.single-product-tab .video-content .video-popup-btn:hover {
    -webkit-transform: translate(-50%, -55%);
    -ms-transform: translate(-50%, -55%);
    transform: translate(-50%, -55%);
}

@media (max-width: 991.98px) {
    .single-product-tab .video-content {
        width: 100%;
    }
}

.prduct-reviews>li+li {
    margin-top: 30px;
}

.prduct-reviews>li>img {
    width: 130px;
    -ms-flex-negative: 0;
    flex-shrink: 0;
}

.product2-slider-system .rtl-slider-flex {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

@media (max-width: 1199.98px) {
    .product2-slider-system .rtl-slider-flex {
        display: block;
    }
}

.product2-slider-system .rtl-slider-flex .rtl-slider {
    width: 70%;
    margin-right: 25px;
    min-height: 600px;
}

.product2-slider-system .rtl-slider-flex .rtl-slider .slick-list {
    margin: 0 -12px;
}

.product2-slider-system .rtl-slider-flex .rtl-slider .slick-list .slick-slide {
    margin: 0 12px;
}

@media (max-width: 1399.98px) {
    .product2-slider-system .rtl-slider-flex .rtl-slider {
        width: 85%;
    }
}

@media (max-width: 1199.98px) {
    .product2-slider-system .rtl-slider-flex .rtl-slider {
        width: 100%;
        min-height: auto;
    }
}

.product2-slider-system .rtl-slider-flex .rtl-slider img {
    width: 980px;
}

@media (max-width: 1199.98px) {
    .product2-slider-system .rtl-slider-flex .rtl-slider img {
        width: 97%;
    }
}

.product2-slider-system .rtl-slider-nav .rtl-slider-slide {
    margin-bottom: 15px;
}

@media (max-width: 1199.98px) {
    .product2-slider-system .rtl-slider-nav {
        margin-top: 24px;
    }
    .product2-slider-system .rtl-slider-nav .slick-list {
        margin: 0 -12px;
    }
    .product2-slider-system .rtl-slider-nav .slick-list .slick-slide {
        margin: 0 12px;
    }
}

.product2-slider-system .slick-slide.slick-current.slick-active .rtl-slider-slide {
    opacity: 1;
}

.product-2-info-left {
    position: relative;
    padding-top: 60px;
}

.product-2-info-left .single-product-info .countdown-content {
    max-width: 590px;
    background-color: var(--primary-color);
    color: var(--white-color);
}

.product-2-info-left .single-product-info .countdown-content .countdown-flexign {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    position: relative;
    gap: 34px;
    padding: 10px 30px;
}

@media (max-width: 1399.98px) {
    .product-2-info-left .single-product-info .countdown-content .countdown-flexign {
        gap: 10px;
    }
}

@media (max-width: 1199.98px) {
    .product-2-info-left .single-product-info .countdown-content .countdown-flexign {
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }
}

@media (max-width: 1199.98px) {
    .product-2-info-left .single-product-info .countdown-content .countdown-flexign .conutdown-text {
        text-align: center;
        padding-bottom: 10px;
    }
}

.product-2-info-left .single-product-info .countdown-content .countdown-flexign .conutdown-text span {
    font-size: 14px;
    font-weight: 400;
}

.product-2-info-left .single-product-info .countdown-content .countdown-flexign .conutdown-text i {
    margin-right: 5px;
}

@media (max-width: 1199.98px) {
    .product-2-info-left .single-product-info .countdown-content .countdown-flexign .countdown {
        text-align: center;
    }
}

.product-2-info-left .single-product-info .countdown-content .countdown-flexign .countdown ul li {
    display: inline-block;
    margin: 0 13px;
    font-size: 12px;
    font-weight: 400;
    font-family: var(--body-font);
    position: relative;
}

.product-2-info-left .single-product-info .countdown-content .countdown-flexign .countdown ul li .timer-count-number {
    display: block;
    text-align: center;
    font-size: 20px;
    font-weight: 500;
}

.product-2-info-left .single-product-info .countdown-content .countdown-flexign .countdown ul li .countdown-dots {
    position: absolute;
    top: 13%;
    left: 143%;
}

.accodinon-box {
    border: 1px solid var(--light-stroke);
    padding: 30px 40px;
}

@media (max-width: 991.98px) {
    .accodinon-box {
        margin-top: 30px;
    }
}

.accodinon-box .accordion .accordion-item {
    border-bottom: 1px solid #e5e5e5;
}

.accodinon-box .accordion .accordion-item:last-child {
    border-bottom: none;
}

.accodinon-box .accordion button {
    position: relative;
    display: block;
    text-align: left;
    width: 100%;
    padding: 1em 0;
    font-size: 18px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
    border: none;
    background: none;
    outline: none;
    font-family: 'prompt';
}

.accodinon-box .accordion button:hover,
.accodinon-box .accordion button:focus {
    cursor: pointer;
}

.accodinon-box .accordion button .accordion-title {
    padding: 20px 0;
}

.accodinon-box .accordion button .icon {
    display: inline-block;
    position: absolute;
    top: 18px;
    right: 0;
    width: 22px;
    height: 22px;
}

.accodinon-box .accordion-item {
    border: none;
}

.accodinon-box .accordion button .icon::before {
    display: block;
    position: absolute;
    content: '';
    top: 9px;
    left: 5px;
    width: 10px;
    height: 2px;
    background: currentColor;
}

.accodinon-box .accordion button .icon::after {
    display: block;
    position: absolute;
    content: '';
    top: 5px;
    left: 9px;
    width: 2px;
    height: 10px;
    background: currentColor;
}

.accodinon-box .accordion button[aria-expanded='true'] .icon::after {
    width: 0;
}

.accodinon-box .accordion button[aria-expanded='true']+.accordion-content {
    opacity: 1;
    max-height: 15em;
    -webkit-transition: all 200ms linear;
    -o-transition: all 200ms linear;
    transition: all 200ms linear;
    will-change: opacity, max-height;
}

.accodinon-box .accordion .accordion-content {
    opacity: 0;
    max-height: 0;
    overflow: hidden;
    -webkit-transition: opacity 200ms linear, max-height 200ms linear;
    -o-transition: opacity 200ms linear, max-height 200ms linear;
    transition: opacity 200ms linear, max-height 200ms linear;
    will-change: opacity, max-height;
}

.accodinon-box .accordion .accordion-content p {
    font-size: 16px;
    font-style: normal;
    font-weight: 300;
    line-height: 26px;
    font-family: 'prompt';
}

.inner-product-details3 {
    background-color: #f9f9f9;
}

.inner-product-details3 .single-product-tab {
    background-color: var(--white-color);
    padding: 100px;
    margin-top: 50px;
}

.inner-product-details3 .product-details-3-area-bg {
    background: var(--white-color);
    padding: 100px;
}

.pd-3-slider-wrapper {
    width: 200px;
}

.pd-3-slider-wrapper .slick-slide {
    margin-bottom: 15px;
}

.pd-3-slider-wrapper .slick-slide .feature-image {
    background-color: var(--white-color);
    text-align: center;
    height: 210px;
}

.pd-3-slider-wrapper .slick-slide .feature-image img {
    max-width: 100%;
    display: inline-block;
}

@media (max-width: 991.98px) {
    .pd-3-slider-wrapper .product-nav-slider2 .slick-list {
        margin: 0 -12px;
    }
    .pd-3-slider-wrapper .product-nav-slider2 .slick-list .slick-slide {
        margin: 0 12px;
    }
}

@media (max-width: 991.98px) {
    .pd-3-slider-wrapper {
        width: 100%;
    }
    .pd-3-slider-wrapper .feature-image {
        height: auto;
    }
}

.rtl-slider .rtl-slider-slide {
    position: relative;
}

.rtl-slider .rtl-slider-slide .sale-badge {
    width: 50px;
    height: 50px;
    background-color: var(--primary-color);
    color: var(--white-color);
    border-radius: 50%;
    position: absolute;
    left: 50px;
    top: 50px;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    font-size: 15px;
}

/************* cart table *************/

.cart-table {
    width: 100%;
    border: 1px solid var(--light-stroke);
}

.cart-table tr {
    border-top: 1px solid var(--light-stroke);
}

.cart-table th {
    font-weight: 400;
    text-transform: uppercase;
    padding: 24px 40px;
}

.cart-table .remove_product {
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.cart-table .remove_product:hover {
    color: var(--secondary-color);
}

.cart-table td {
    padding: 30px 40px;
    vertical-align: middle;
}

.cart-table td .product-box {
    min-width: 350px;
}

.cart-table td .feature-image {
    width: 80px;
    padding: 10px;
}

.cart-table td .quantity input {
    max-width: 50px;
    border: 1px solid var(--light-stroke);
    padding: 10px;
    text-align: center;
}

.cart-table td .quantity .step-btns {
    width: 30px;
    height: 46px;
    border: 1px solid var(--light-stroke);
    border-left: 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    position: relative;
}

.cart-table td .quantity .step-btns::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    width: 100%;
    height: 1px;
    background-color: var(--light-stroke);
}

.cart-table td .quantity .step-btns button {
    font-size: 12px;
    padding: 0;
    display: block;
}

.cart-coupon-form {
    max-width: 475px;
    gap: 10px;
}

.cart-coupon-form input {
    width: 100%;
    background-color: transparent;
    border: 1px solid var(--light-stroke);
    font-weight: 300;
    font-size: 14px;
}

.cart-coupon-form .submit-btn {
    border: 1px solid var(--light-stroke);
    -ms-flex-negative: 0;
    flex-shrink: 0;
    padding: 13px 30px;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.cart-coupon-form .submit-btn:hover {
    background-color: var(--primary-color);
    color: var(--white-color);
}

.cart-calculator-form table {
    width: 100%;
    border: 1px solid var(--light-stroke);
}

.cart-calculator-form table tr {
    border-top: 1px solid var(--light-stroke);
}

.cart-calculator-form table td {
    font-size: 18px;
    vertical-align: top;
    width: 50%;
    padding: 24px 32px;
}

.cart-calculator-form table td .shipping-method {
    min-width: 250px;
}

.cart-calculator-form table td .shipping-method label {
    display: block;
}

.cart-calculator-form table td .shipping-method label span {
    position: relative;
    padding-left: 24px;
    margin-left: -20px;
}

.cart-calculator-form table td .shipping-method label span::before {
    content: '';
    position: absolute;
    left: 0;
    top: 6px;
    width: 18px;
    height: 18px;
    border: 1px solid var(--primary-color);
    border-radius: 50%;
}

.cart-calculator-form table td .shipping-method label span::after {
    content: '';
    position: absolute;
    left: 5px;
    top: 11px;
    width: 8px;
    height: 8px;
    background-color: var(--primary-color);
    border-radius: 50%;
    opacity: 0;
}

.cart-calculator-form table td .shipping-method label input {
    opacity: 0;
}

.cart-calculator-form table td .shipping-method label input:checked~span::after {
    opacity: 1;
}

.cart-calculator-form table td .shipping-method label+label {
    margin-top: 12px;
}

.cart-calculator-form table td .shipping-method p {
    max-width: 270px;
}

/*************** wishlist table *****************/

.wishlist-table table {
    border: 1px solid var(--light-stroke);
    border-top: 0;
}

.wishlist-table tr {
    border-top: 1px solid var(--light-stroke);
}

.wishlist-table tr th {
    background-color: var(--primary-color);
    color: var(--white-color);
    padding: 24px 32px;
    font-weight: 400;
}

.wishlist-table tr td {
    padding: 30px 40px;
    vertical-align: middle;
}

.wishlist-table tr td .product-box {
    min-width: 340px;
}

.wishlist-table tr td .stock-status {
    min-width: 290px;
    gap: 10px;
}

.wishlist-table tr td .remove_product {
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.wishlist-table tr td .remove_product:hover {
    color: var(--secondary-color);
}

.wishlist-table tr td .feature-image {
    width: 80px;
    padding: 10px;
}

/******************* 404 page ***************/

.not-found-area {
    padding: 265px 0;
    min-height: 100vh;
}

.not-found-area .overlay-bg {
    background-size: cover;
    background-repeat: no-repeat;
}

.not-found-area .content-404 h1 {
    font-size: 300px;
    font-weight: 500;
    line-height: 260px;
}

.not-found-area .content-404 p {
    font-size: 18px;
}

@media (max-width: 991.98px) {
    .not-found-area .content-404 h1 {
        font-size: 250px;
    }
}

@media (max-width: 767.98px) {
    .not-found-area .content-404 h1 {
        font-size: 200px;
        line-height: 200px;
    }
}

@media (max-width: 575.98px) {
    .not-found-area .content-404 h1 {
        font-size: 150px;
    }
}

@media (max-width: 575.98px) {
    .not-found-area {
        padding: 150px 0;
    }
}

/*************** contact page *************/

.contact-form-box {
    padding: 60px;
}

@media (max-width: 767.98px) {
    .contact-form-box {
        padding: 32px;
    }
}

.location-map {
    opacity: 0.8;
}

.location-map iframe {
    width: 100%;
    height: 500px;
}

.location-box {
    padding: 70px 60px;
}

.location-box::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background-color: transparent;
    z-index: -1;
    border: 1px solid var(--secondary-color);
    left: 0;
    top: 0;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
    opacity: 0;
}

.location-box h3 {
    position: relative;
}

.location-box h3::before {
    content: '';
    position: absolute;
    left: 50%;
    bottom: -7px;
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
    width: 30px;
    height: 1px;
    background-color: var(--primary-color);
}

.location-box:hover::before {
    opacity: 1;
    top: 15px;
    left: -15px;
}

/**************** faq page ************/

.faq-form {
    border: 1px solid var(--light-stroke);
    padding: 40px 40px 80px;
}

.faq-form input,
.faq-form textarea {
    background-color: transparent;
    border: 1px solid var(--light-stroke);
    margin-bottom: 20px;
}

.faq-accordion .accordion-item {
    border: 0;
    border-top: 1px solid var(--light-stroke);
    border-bottom: 1px solid var(--light-stroke);
    padding: 30px 0;
}

.faq-accordion .accordion-item+.accordion-item {
    border-top: 0;
}

.faq-accordion .accordion-item .accordion-header a {
    font-size: 18px;
    color: var(--primary-color);
    font-weight: 500;
}

/*************** checkout page ***************/

.returning-box {
    padding: 18px 30px;
    position: relative;
}

.returning-box .checkout-login-form {
    background-color: var(--white-color);
    padding: 24px;
    margin-top: 24px;
    display: none;
}

.returning-box .checkout-login-form .theme-input {
    background-color: transparent;
    border: 1px solid var(--light-stroke);
    margin-bottom: 20px;
}

.checkout-coupon-box {
    padding: 18px 30px;
    border: 1px solid var(--light-stroke);
}

.checkout-coupon-box .checkout-coupon-form {
    margin-top: 24px;
    max-width: 400px;
    display: none;
}

.checkout-coupon-box .checkout-coupon-form input {
    margin-bottom: 20px;
}

.checkout-form .input-field label {
    margin-bottom: 10px;
}

.checkout-form .input-field .nice-select {
    height: 54px;
    line-height: 54px;
}

.checkout-form .input-field .nice-select.open .list {
    width: 100%;
}

.checkout-form .theme-input {
    border: 1px solid var(--light-stroke);
    font-weight: 300;
}

.order-table {
    width: 100%;
    padding: 40px;
    border: 1px solid var(--light-stroke);
}

.order-table table {
    width: 100%;
}

.order-table table tr {
    border-bottom: 1px solid var(--light-stroke);
}

.order-table table th {
    text-transform: uppercase;
    font-weight: 500;
    padding: 24px 0;
}

.order-table table td {
    padding: 24px 0;
    vertical-align: middle;
}

.order-table table td .product-box {
    min-width: 340px;
}

.order-table table td .pp-price {
    min-width: 100px;
}

.order-table table .feature-image {
    width: 80px;
    padding: 10px;
}

.checkout-payment-methods label {
    display: block;
    position: relative;
}

.checkout-payment-methods label input {
    opacity: 0;
}

.checkout-payment-methods label input:checked~span::after {
    opacity: 1;
}

.checkout-payment-methods label span.radio {
    position: relative;
    padding-left: 15px;
}

.checkout-payment-methods label span.radio::before {
    content: '';
    position: absolute;
    left: -20px;
    top: 3px;
    width: 18px;
    height: 18px;
    border: 1px solid var(--primary-color);
    background-color: transparent;
    border-radius: 50%;
}

.checkout-payment-methods label span.radio::after {
    content: '';
    position: absolute;
    left: -15px;
    top: 8px;
    width: 8px;
    height: 8px;
    background-color: var(--primary-color);
    border-radius: 50%;
    opacity: 0;
}

.checkout-payment-methods label p {
    margin-top: 4px;
}

.checkout-payment-methods label+label {
    margin-top: 12px;
}

.checkout-payment-methods label input:checked~.description {
    display: block;
}

.checkout-payment-methods label input:checked~span.checkbox::before {
    background-color: var(--primary-color);
    border-color: var(--primary-color);
}

.checkout-payment-methods label .description {
    display: none;
    margin-top: 10px;
}

.checkout-payment-methods label span.checkbox {
    position: relative;
    padding-left: 10px;
}

.checkout-payment-methods label span.checkbox::before {
    content: '\f00c';
    font-family: 'FontAwesome';
    font-size: 10px;
    text-align: center;
    line-height: 12px;
    position: absolute;
    left: -15px;
    top: 3px;
    width: 15px;
    height: 15px;
    border: 1px solid var(--border-gray);
    color: var(--white-color);
}

/*********************** blog single ******************/

.tags-social span {
    color: var(--primary-color);
    text-transform: uppercase;
}

.tags-social .tags-list {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    gap: 15px;
}

.tags-social .tags-list a {
    padding: 10px 20px;
    border: 1px solid var(--light-stroke);
    color: var(--primary-color);
    font-size: 15px;
}

.tags-social .tags-list a:hover {
    background-color: var(--primary-color);
    color: var(--white-color);
    border-color: var(--primary-color);
}

.tags-social .social-share a {
    display: inline-block;
    color: var(--primary-color);
    padding: 0 6px;
}

.tags-social .social-share a:hover {
    color: var(--secondary-color);
}

.blog-author-box .author-thumb {
    width: 210px;
    -ms-flex-negative: 0;
    flex-shrink: 0;
}

.blog-author-box .author-socials a {
    width: 40px;
    height: 40px;
    border: 1px solid var(--light-stroke);
    color: var(--primary-color);
    display: inline-block;
    text-align: center;
    line-height: 40px;
    margin-right: 10px;
}

.blog-author-box .author-socials a:hover {
    color: var(--white-color);
    background-color: var(--primary-color);
    border-color: var(--primary-color);
}

.spacer {
    border-top: 1px solid var(--light-stroke);
}

.blog-comment-list li {
    padding: 30px 0;
}

.blog-comment-list li+li {
    border-top: 1px solid var(--light-stroke);
}

.blog-comment-list .client-thumb {
    width: 120px;
    -ms-flex-negative: 0;
    flex-shrink: 0;
}

.blog-comment-list .reply-btn {
    font-weight: 500;
    position: absolute;
    right: 0;
    top: 0;
    text-transform: uppercase;
}

@media (max-width: 767.98px) {
    .blog-comment-list .reply-btn {
        position: initial;
        margin-top: 15px;
    }
}

.ur3-hero-box {
    padding: 333px 0 160px;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    -webkit-transition: 2s;
    -o-transition: 2s;
    transition: 2s;
}

.ur3-hero-box::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.25);
    z-index: -1;
}

.ur3-hero-box:hover {
    background-size: 110% 110%;
}

@media (max-width: 1199.98px) {
    .ur3-hero-box {
        padding: 130px 12px;
        text-align: center;
        background-size: cover;
    }
    .ur3-hero-box:hover {
        background-size: cover;
    }
}

.ur3-hero-product-box {
    background-color: #F5F5EE;
    padding: 254px 60px 60px;
    position: relative;
}

.ur3-hero-product-box .feature-image {
    position: absolute;
    right: 0;
    top: 0;
    mix-blend-mode: multiply;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur3-hero-product-box h2 {
    position: relative;
    display: inline-block;
}

.ur3-hero-product-box h2::before {
    content: '';
    position: absolute;
    right: 0;
    bottom: 0;
    width: 0;
    height: 2px;
    background-color: var(--primary-color);
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur3-hero-product-box:hover .feature-image {
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
}

.ur3-hero-product-box:hover h2::before {
    width: 100%;
    left: 0;
    right: auto;
}

@media (max-width: 1199.98px) {
    .ur3-hero-product-box .feature-image {
        max-width: 300px;
    }
}

@media (max-width: 991.98px) {
    .ur3-hero-product-box {
        padding: 254px 40px 40px;
    }
}

.ur3-hero-box .hero-box-content {
    max-width: 640px;
    margin: 0 auto;
    padding-left: 7%;
}

@media (max-width: 1600px) {
    .ur3-hero-box .hero-box-content {
        padding-left: 0;
    }
}

.ur3-cta-section {
    background-repeat: no-repeat;
    background-size: cover;
    background-position: left center;
}

/***************** trending section start **************/

.trending-filter-nav {
    gap: 20px;
}

.trending-filter-nav li a {
    color: var(--text-color);
    font-size: 20px;
    position: relative;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.trending-filter-nav li a::before {
    content: '';
    position: absolute;
    right: 0;
    bottom: 0;
    width: 0;
    height: 1px;
    background-color: var(--secondary-color);
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.trending-filter-nav li a:hover {
    color: var(--secondary-color);
}

.trending-filter-nav li a.active {
    color: var(--secondary-color);
}

.trending-filter-nav li a.active::before {
    width: 100%;
    right: auto;
    left: 0;
}

/**************** featured products ********************/

.ur3-featured-product .overlay-content {
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    text-align: center;
    background-color: rgba(255, 255, 255, 0.8);
    width: calc(100% - 120px);
    height: calc(100% - 120px);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
}

.ur3-featured-product .overlay-content h3 {
    margin-bottom: 40px;
    margin-top: 24px;
}

@media (max-width: 1199.98px) {
    .ur3-featured-product .overlay-content {
        width: calc(100% - 60px);
        height: calc(100% - 60px);
    }
}

@media (max-width: 991.98px) {
    .ur3-featured-product .overlay-content h3 {
        margin-bottom: 24px;
        margin-top: 16px;
    }
}

@media (max-width: 767.98px) {
    .ur3-featured-product .overlay-content h3 {
        margin-bottom: 40px;
        margin-top: 24px;
    }
}

@media (max-width: 460px) {
    .ur3-featured-product .overlay-content {
        width: calc(100% - 40px);
        height: calc(100% - 40px);
    }
    .ur3-featured-product .overlay-content h3 {
        margin-bottom: 24px;
        margin-top: 16px;
    }
}

/**************** catgory section start *****************/

.ur3-category-box {
    text-align: center;
}

.ur3-category-box .thumb-wrapper {
    width: 200px;
    height: 200px;
    padding: 40px;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    z-index: 1;
}

.ur3-category-box .thumb-wrapper::before {
    content: '';
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    border-radius: 50%;
    border: 1px solid var(--secondary-color);
    width: 200px;
    height: 200px;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
    z-index: -1;
    opacity: 0;
}

.ur3-category-box .thumb-wrapper img {
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur3-category-box .ct-title {
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur3-category-box .ct-title h6 {
    margin-top: 30px;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur3-category-box .ct-title h6:hover {
    color: var(--secondary-color);
}

.ur3-category-box:hover .thumb-wrapper::before {
    opacity: 1;
    -webkit-transform: translate(-50%, -50%) scale(0.8);
    -ms-transform: translate(-50%, -50%) scale(0.8);
    transform: translate(-50%, -50%) scale(0.8);
}

.ur3-category-box:hover .thumb-wrapper img {
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05);
}

/****************** featured tolltip *************/

.ur3-featured-box .ur-tooltip {
    position: absolute;
}

.ur3-featured-box .ur-tooltip button {
    width: 30px;
    height: 30px;
    background-color: var(--white-color);
    color: var(--primary-color);
    border-radius: 50%;
    -webkit-box-shadow: 0 0 0 10px rgba(255, 255, 255, 0.3);
    box-shadow: 0 0 0 10px rgba(255, 255, 255, 0.3);
}

.ur3-featured-box .ur-tooltip.tooltip-1 {
    left: 36%;
    top: 20%;
}

.ur3-featured-box .ur-tooltip.tooltip-2 {
    left: 42%;
    top: 40%;
}

.ur3-featured-box .ur-tooltip.tooltip-3 {
    left: 20%;
    top: 67%;
}

.ur3-featured-box .ur-tooltip .ur-tooltip-product {
    opacity: 0;
    visibility: hidden;
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
    position: absolute;
    z-index: 2;
    left: calc(100% + 10px);
    top: -40px;
    width: 280px;
}

.ur3-featured-box .ur-tooltip:hover .ur-tooltip-product {
    opacity: 1;
    visibility: visible;
}

@media (max-width: 767.98px) {
    .ur3-featured-box .ur-tooltip .ur-tooltip-product {
        width: 180px;
    }
    .ur3-featured-box .ur-tooltip .ur-tooltip-product .feature-image {
        display: none;
    }
}

@media (max-width: 460px) {
    .ur3-featured-box .ur-tooltip .ur-tooltip-product {
        left: -60px;
    }
}

.ur-tooltip-product {
    padding: 12px;
    border-radius: 3px;
    background-color: var(--white-color);
}

.ur-tooltip-product .feature-image {
    max-width: 90px;
    padding: 8px;
}

.ur-tooltip-product .feature-image img {
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur-tooltip-product h6 {
    -webkit-transition: var(--transition-base);
    -o-transition: var(--transition-base);
    transition: var(--transition-base);
}

.ur-tooltip-product h6:hover {
    color: var(--secondary-color);
}

.ur-tooltip-product:hover .feature-image img {
    -webkit-transform: scale(1.06);
    -ms-transform: scale(1.06);
    transform: scale(1.06);
}

.store-search-box {
    border: 1px solid var(--primary-color);
    padding: 42px 60px;
}

.store-search-box input[type='text'] {
    border: 0;
    font-weight: 300;
}

.store-search-box .primary-btn span {
    width: 45px;
    height: 45px;
    text-align: center;
    line-height: 45px;
    padding: 0;
}

.store-search-box .primary-btn:hover svg path {
    fill: var(--primary-color);
}

@media (max-width: 460px) {
    .store-search-box {
        padding: 32px 24px;
    }
}
</style>
