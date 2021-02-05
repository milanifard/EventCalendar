# Sadaf Calendar

[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]



<!-- PROJECT LOGO -->
<br />
<p align="center">
  <a href="https://github.com/github_username/repo_name">
    <img src="images/logo.jpg" alt="Logo" width="80" height="80">
  </a>

  <h3 align="center">Sadaf Calendar</h3>

  <p align="center">
Sadaf Calendar based on sadaf framework and various features
    <br />
    <a href="https://github.com/github_username/repo_name">View Demo</a>
    ·
    <a href="https://github.com/github_username/repo_name/issues">Report Bug</a>
    ·
    <a href="https://github.com/github_username/repo_name/issues">Request Feature</a>
  </p>
</p>



<!-- TABLE OF CONTENTS -->
<details open="open">
  <summary><h2 style="display: inline-block">Table of Contents</h2></summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgements">Acknowledgements</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

<p align="right">
فایل CalendarCreateEvents.php  دارای 2 کلاس CalendarCreateEvents و manage_create_event  که 
دارای 2 متد استاتیک برای ایجاد و یا حذف یک رویداد با استفاده از آیدی کاربر می باشد
  </p>
فایل CalendarDays.php  که دارای  کلاس CalendarDays  که شامل تمام ویژگی های روزها میباشد و کلاس manage_days  برای مدیریت آن شامل : ایجاد ، حذف ، گرفتن تمامی روز ها، گرفتن روزهای تعطیل، گرفتن رویدادها، گرفتن رویدادهای هفته، گرفتن رویداد های ماه میباشد
فایل CalendarEvent.php  که دارای کلاس CalendarEvent شامل تمام ویژگی های یک رویداد و کلاس manage_event برای مدیریت یک رویداد شامل : ایجاد رویداد، انتقال رویداد به یک روز دیگر، حذف رویداد، گرفتن لیست رویداد ها میباشد.
فایل CalendarTask.php که دارای کلاس CalendarTask شامل تمام ویژگی های یک تسک و کلاس manage_task برای مدیریت تسک ها شامل : ایجاد تسک ، حذف تسک و گرفتن تسک های کاربر مورد نظر می باشد
فایل های دایرکتوری API  برای هم برای برای اتصال به بخش فرانت با دریافت پارامتر های مربوطه با متد POST و استفاده از متد های استاتیک کلاس های ایجاد شده برای اتصال و تغییر در دیتابیس


### Built With

* [PHP]()
* [HTML]()
* [CSS]()
* [Vu.js]()



<!-- GETTING STARTED -->
## Getting Started



<!-- USAGE EXAMPLES -->
## Usage

Use this space to show useful examples of how a project can be used. Additional screenshots, code examples and demos work well in this space. You may also link to more resources.



<!-- ROADMAP -->
## Roadmap

See the [open issues](https://github.com/github_username/repo_name/issues) for a list of proposed features (and known issues).



<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to be learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request



<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE` for more information.



<!-- CONTACT -->
## Authors
* [Hamed Davarmanesh](https://t.me/hamed_dvrm)
* [Behrouz Ghamkhar](https://t.me/behrouz_gk)
* [Amirhosein Servati](https://t.me/AmirhosseinServati)
* [Amirhosein Yahgub nezhad](https://t.me/Ghaderon)
* [Hamed Goharshad](https://t.me/hamedGord)



<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/github_username/repo.svg?style=for-the-badge
[contributors-url]: https://github.com/milanifard/EventCalendar/repo/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/github_username/repo.svg?style=for-the-badge
[forks-url]: https://github.com/milanifard/EventCalendar/repo/network/members
[stars-shield]: https://img.shields.io/github/stars/github_username/repo.svg?style=for-the-badge
[stars-url]: https://github.com/milanifard/EventCalendar/repo/stargazers
[issues-shield]: https://img.shields.io/github/issues/github_username/repo.svg?style=for-the-badge
[issues-url]: https://github.com/milanifard/EventCalendar/repo/issues
[license-shield]: https://img.shields.io/github/license/github_username/repo.svg?style=for-the-badge
[license-url]: https://github.com/milanifard/EventCalendar/repo/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/milanifard/EventCalendar


![alt text](https://github.com/milanifard/EventCalendar/blob/master/ER.jpg)
