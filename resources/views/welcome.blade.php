<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MoodPaws - Lucky Helper</title>
    <link rel="icon" href="paw-icon.png" type="image/png">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
@extends('layouts.app')

@section('content')
    <main>
        <div class="text-wrapper">
            <h1>Лаки - твой друг и  помощник в саморазвитии</h1>
            <p>Зарегистрируйтесь бесплатно и улучшите свою жизнь: сделайте каждый день продуктивнее и радостнее с нашим <span>виртуальным помощником</span></p>
            <button>Начать знакомство</button>
        </div>
        <img src="img/img 1 kitty.png" alt="">
    </main>
    <div class="bl-2" id="about">
    <img src="img/img kitty 2.png" alt="" class="ellipse">
        <div class="text-row">
            <h1>О Лаки</h1>
            <p>Лаки — это ваш верный виртуальный помощник на пути к улучшению настроения, достижению целей и управлению задачами. Этот милый нарисованный персонаж создан для того, чтобы сделать вашу жизнь легче, организованнее и радостнее.</p>
        </div>
        <h1 class="bh1">Как Лаки помогает?</h1>
        <div class="cards" id="services">
        <div class="card">
                <h1>Отслеживание настроения</h1>
                <p>Лаки ежедневно спрашивает вас о вашем настроении, записывает его и помогает анализировать изменения  с течением времени.</p>
            </div>
            <div class="card">
                <h1>Постановка  целей</h1>
                <p>Лаки помогает вам ставить реалистичные цели, разбивать их на подзадачи и отмечать выполненные шаги.</p>
            </div>
            <div class="card">
                <h1>Ведение заметок </h1>
                <p>Лаки предлагает вести дневник, записывать важные мысли и идеи, помогая сохранить их в порядке.</p>
            </div>
        </div>
    </div>
    <div class="wrap1">
    <div class="support-wrap">
        <div class="support">
            <h1>Поддержка</h1>
            <p>Задайте свой вопрос или найдите на него ответ в нашем разделе FAQ</p>
        </div>
        <img src="img/image 4.png" alt="">
    </div>
    <div class="faq" id="faq">
        <div class="question" id="question">
            <p>Что такое MoodPaws?</p>
            <p class="answer" id="answer">MoodPaws — это платформа, которая помогает вам отслеживать настроение, ставить цели, планировать задачи и вести заметки, используя виртуального помощника Лаки.</p>
        </div>
        <div class="question" id="question">
            <p>Как работает отслеживание настроения?</p>
            <p class="answer" id="answer">Лаки ежедневно спрашивает вас о вашем настроении, записывает его и предоставляет аналитику, чтобы вы могли увидеть изменения с течением времени и понять, что влияет на ваше эмоциональное состояние.</p>
        </div>
        <div class="question" id="question">
            <p>Как ставить цели и задачи?</p>
            <p class="answer" id="answer">Вы можете устанавливать краткосрочные и долгосрочные цели, разбивать их на подзадачи и управлять ими с помощью планировщика задач. Лаки будет напоминать вам о дедлайнах и следить за вашим прогрессом.</p>
        </div>
        
    </div>
    <div class="feedback" id="contact">
    <h1>Задайте вопрос</h1>
        <input type="email" placeholder="ваш e-mail">
        <input type="text" placeholder="ваш вопрос">
        <button>Отправить</button>
    </div>
    <div class="blog" id="blog">
    <h1>Блог</h1>
        <p class="blog-p">Добро пожаловать в блог Лаки, ваш источник вдохновения и полезных советов на пути к лучшему настроению, продуктивности и саморазвитию. Здесь вы найдете статьи о самых различных аспектах управления временем, эмоциональным благополучием и достижением целей.</p>
        <div class="blog-cards">
            <div class="b-card">
                <p class="s">Как управление настроением помогает достигать целей</p>
                <p class="d">В этой статье мы рассмотрим, как отслеживание и управление своим эмоциональным состоянием может стать мощным инструментом для достижения личных и профессиональных целей.</p>
                <img src="img/paw2.png" alt="">
            </div>
            <div class="b-card2">
                <p class="s1">Как управление настроением помогает достигать целей</p>
                <p class="d1">В этой статье мы рассмотрим, как отслеживание и управление своим эмоциональным состоянием может стать мощным инструментом для достижения личных и профессиональных целей.</p>
                <img src="img/paw.png" alt="">
            </div>
        </div>
        <button>Читать больше</button>
    </div>
    </div>
   
   @endsection
    <script src="script.js"></script>
</body>
</html>
