<?php

    /**
     * Need to keep this as array() vs. [] for Transilex
     */
    $messages = array(
        'language_text'                   => 'English',
        'download'                        => 'Tải về',
        'documentation'                   => 'Tài liệu',
        'forum'                           => 'Forum',
        'blog'                            => 'Blog',
        'support'                         => 'Hỗ trợ',
        'donate'                          => 'Đóng góp',
        'store'                           => 'Gian hàng',
        'github'                          => 'GitHub',
        'phalcon_description'             => "<strong>Phalcon</strong> is a web framework implemented as a C extension offering <a href=':1:'>high performance</a> and lower resource consumption",
        'the_fastest_php_framework'       => 'The fastest<br />PHP Framework',
        'try_online'                      => 'Try It Online',
        'see_screencasts'                 => 'See Screencasts',
        'everything_you_need_upper'       => 'EVERYTHING YOU NEED',
        'full_mvc_applications'           => "Full <a href=':1:'>MVC</a> applications",
        'single_module'                   => 'Single-Module',
        'multi_module'                    => 'Multi-Module',
        'micro_applications'              => 'Micro Applications',
        'orm'                             => 'ORM',
        'transactions'                    => 'Transactions',
        'behaviors'                       => 'Behaviors',
        'relations'                       => 'Relations',
        'phql'                            => 'PHQL',
        'events'                          => 'Events',
        'validations'                     => 'Validations',
        'hydration'                       => 'Hydration',
        'logging'                         => 'Logging',
        'profiling'                       => 'Profiling',
        'sharding'                        => 'Sharding',
        'odm_for_mongo'                   => 'ODM for Mongo',
        'template_engine_volt'            => 'Template Engine (Volt)',
        'di_ioc'                          => 'DI/IOC',
        'events_management'               => 'Events Management',
        'encryption'                      => 'Encryption',
        'http_request'                    => 'HTTP Request',
        'http_response'                   => 'Response',
        'http_cookies'                    => 'Cookies',
        'escaping'                        => 'Escaping',
        'filtering'                       => 'Filtering',
        'forms_builder'                   => 'Forms Builder',
        'forms_validation'                => 'Validation',
        'flash_messages'                  => 'Flash Messages',
        'cache'                           => 'Cache',
        'pagination'                      => 'Pagination',
        'annotations'                     => 'Annotations',
        'security'                        => 'Security',
        'translations'                    => 'Translations',
        'assets_management'               => 'Assets Management',
        'universal_auto_loader'           => 'Universal Auto-Loader',
        'cli'                             => 'CLI',
        'phalcon_forum_upper'             => 'PHALCON FORUM',
        'stack_overflow_upper'            => 'STACK OVERFLOW',
        'github_upper'                    => 'GITHUB',
        'email_us_upper'                  => 'EMAIL US',
        'services_upper'                  => 'SERVICES',
        'consulting_upper'                => 'CONSULTING',
        'requirements_analysis'           => 'Requirements Analysis',
        'implementation'                  => 'Implementation',
        'ongoing_support'                 => 'Ongoing Support',
        'read_more'                       => 'Read more',
        'hosting_upper'                   => 'HOSTING',
        'phalcon_can_be_installed'        => 'Phalcon can be installed on',
        'main_upper'                      => 'MAIN',
        'consulting'                      => 'Consulting',
        'hosting'                         => 'Hosting',
        'support_upper'                   => 'SUPPORT',
        'forum_community'                 => 'Forum / Community',
        'stack_overflow'                  => 'Stack Overflow',
        'issue_tracker'                   => 'Issue Tracker',
        'get_involved_upper'              => 'GET INVOLVED',
        'team'                            => 'Team',
        'about'                           => 'About',
        'roadmap'                         => 'Roadmap',
        'donate_to_phalcon'               => 'Donate to Phalcon:',
        'or'                              => 'or',
        'twitter'                         => 'Twitter',
        'facebook'                        => 'Facebook',
        'google_plus'                     => 'Google Plus',
        'vimeo'                           => 'Vimeo',

        'download_phalcon'                => 'Download Phalcon',
        'download_linux'                  => 'Linux/Unix/Mac',
        'download_windows'                => 'Windows DLLs',
        'download_developer_tools'        => 'Developer Tools',
        'download_ide_stubs'              => 'IDE stubs',
        'download_note'                   => 'Phalcon is a C extension, so you need to download a binary for your platform or compile it from source code.',
        'download_compilation'            => 'Compilation',
        'download_compilation_1'          => 'On Linux you can easily compile and install the extension from source code.',
        'download_requirements'           => 'Requirements',
        'download_requirements_1'         => 'We need some packages previously installed:',
        'download_requirements_2'         => 'PHP 5.x development resources',
        'download_requirements_3'         => 'GCC compiler',
        'download_compilation_11'         => '1. To create the extension from C source follow these steps:',
        'download_compilation_12'         => '2. Add the extension to your php.ini:',
        'download_compilation_13'         => '3. Finally, restart the webserver',
        'download_debian'                 => 'Debian',
        'download_debian_1'               => "There is a repo graciously offered by <a href=':1:'>FortRabbit</a> <a href=':2:'>here</a>",
        'download_debian_2'               => 'The package name is php5-phalcon',
        'download_arch'                   => 'Arch Linux',
        'download_arch_1'                 => "There is a PKGBUILD for ArchLinux, available <a href=':1:'>here</a>",
        'download_opensuse'               => 'OpenSUSE',
        'download_opensuse_1'             => "There is a package available <a href=':1:'>here</a> (thanks to <a href=':2:'>Mariusz Łączak</a>)",
        'download_freebsd'                => 'FreeBSD',
        'download_freebsd_1'              => 'A port is available for FreeBSD. You only need these few commands to install it:',
        'download_dependencies'           => 'Dependencies',
        'download_dependencies_1'         => 'Although Phalcon does not binary link to other extensions it does use some of them to offer functionality. The extensions used are:',
        'download_dependencies_2'         => 'It is not necessary for all the above extensions to be present in the system that has Phalcon installed. You can only install the ones that meet your needs. For instance if you use a MySQL database, then you can only load PDO and PDO/MySQL ignoring the Oracle, SQlite, Postgresql and Mongo.',
        'download_need_help'              => 'Need help?',
        'download_need_help_1'            => "Have a look at our <a href=':1:'>support page</a> for ways to get support. We will do our best to help you.",

        'download_windows_note'           => 'We highly recommend you use the latest version of PHP corresponding to our DLLs, so as to take advantage of the full feature set of Phalcon.',
        'download_windows_stable'         => 'Stable/Master versions',
        'download_windows_installation'   => 'Installation',
        'download_windows_installation_1' => "To use phalcon on Windows you can download a DLL library. Edit your php.ini, append at the end, and restart your webserver to load the extension. <a href=':1:'>More</a>.",
        'download_windows_guides'         => 'Related Guides',
        'download_windows_guides_xampp'   => 'Installation on XAMPP',
        'download_windows_guides_wamp'    => 'Installation on WAMP',
        'download_windows_alpha'          => 'Alpha/Beta versions',
        'download_source_code'            => "Source Code: <a href=':1:' target='_download' title='GitHub Repo'>github</a>",
        'download_source_code_switch'     => "Source Code (please switch to the relevant branch): <a href=':1:' target='_download' title='GitHub Repo'>github</a>",
        'download_no_alpha_beta'          => 'No available alpha/beta versions at the moment.',
        'download_windows_older'          => 'Older versions',

        'download_devtools_1'             => 'These tools are a collection of useful scripts to generate skeleton code. Core components of your application can be generated with a simple command, allowing you to easily develop applications using Phalcon.',
        'download_devtools_docs'          => "Documentation: <a href=':1:'>Phalcon Developer Tools</a>",
        'download_devtools_composer'      => 'Installing via Composer',
        'download_devtools_composer_1'    => 'Install composer in a common location or in your project:',
        'download_devtools_composer_2'    => 'Create the composer.json file as follows:',
        'download_devtools_composer_3'    => 'Run the composer installer:',
        'download_devtools_composer_4'    => 'Create a symbolic link to the phalcon.php script:',
        'download_devtools_download'      => 'You can download or clone a cross platform package containing the developer tools from <a href=":1:">Github</a>.',

        'consulting_header'               => "We are offering consulting services for Phalcon <br />and/or PHP implementations",
        'requirements_analysis_1'         => 'One of the biggest problems that developers face is the fact that a lot of projects do not have adequately defined requirements. Therefore, more often than not what the client wants is totally different from what the developer understands and subsequently delivers.',
        'requirements_analysis_2'         => 'We can offer requirements analysis services, discussing with the clients and translating their vision to exact specifications for developers.',
        'implementation_1'                => 'If you wish to hire us to develop your application, we would be more than happy to do so. Using the latest technologies, we can offer a robust solution for your task or project, complete with tests and documentation.',
        'ongoing_support_1'               => 'For customers that are interested in an ongoing support contract we can offer support for their projects on an ongoing basis. Customers can purchase hours of support (minimum 2 hours) at 50 USD per hour.',
        'ongoing_support_2'               => 'Support hours do not expire and can be used whenever needed. For customers that wish to use an ongoing support scheme, we offer flexible plans that would suit their needs better.',
        'sponsors'                        => 'Sponsors',
        'sponsors_1'                      => 'For those that wish to sponsor our work and further the development of Phalcon, we offer various sponsorship options that will fit any budget.',
        'sponsors_2'                      => 'Additionally, customers might want certain features implemented that would normally take a lot longer to do so due to their popularity or complexity. We can certainly accommodate such requests at our normal rates.',
        'contact'                         => 'Contact',
        'contact_1'                       => "Feel free to <a href=':1:'>contact us</a> to discuss your requirements and allow us to offer a solution that would best fit your needs and your budget. No project is too big or too small.",

        'phalcon_team'                    => 'Phalcon Team',
        'team_andres_1'                   => 'Andres is no stranger to open source projects. In the last nine years, he has designed and released frameworks for PHP and has been involved in web development - his main passion.',
        'team_andres_2'                   => "A TR35 winner, Andres' main drive is to always choose and implement or use the right tool for the job, mostly focused on performance. Therefore in 2011 a new idea was in the works; to create a new kind of framework for PHP developers, one that focuses on usability, features and mostly performance.",
        'team_andres_3'                   => 'Through this new innovative approach Phalcon was born. A PHP framework written in C that can offer a wealth of features to developers while maximizing performance and keeping resource utilization low.',
        'team_andres_4'                   => 'Andres is one of the core developers of Phalcon and its inspiration.',
        'team_nikos_1'                    => 'Nikos has been in the IT industry for over 20 years. He was introduced to the PHP world in 2000 and has been using it ever since in personal projects as well as projects for his employers.',
        'team_nikos_2'                    => 'He loves discovering new technologies and ways to integrate them with existing applications and thus reap the benefits they offer.',
        'team_nikos_3'                    => 'He is an avid supporter of Test Driven Development (TDD) and always tries to get 100% coverage in his code.',
        'team_nikos_4'                    => "Nikos' continuing interest in new and innovative technologies breaking out of the norm introduced him to Phalcon. He joined the core team and his tasks mainly involve coordination of NFRs and bug fixes, help with tests, documentation and the incubator. Nikos is also responsible for maintaining the Windows DLLs for the project and offers support whenever possible.",
        'team_nikolay_1'                  => 'Nikolay has been developing web applications for over 10 years. He has been involved in high performance as well as complex websites and designs.',
        'team_nikolay_2'                  => 'Nikolay has been working with Open Source projects for a long time, utilizing them whenever requirements allow. He thus started using his personal time to give back to the community, by forking projects, offering architectural changes and suggestions, as well as performance ones. He has been instrumental in improving Open Source CMS projects receiving positive feedback from the community.',
        'team_nikolay_3'                  => 'His continuous involvement with open source projects has helped him advance his technical knowledge while abiding by the give back to the community mentality.',
        'team_nikolay_4'                  => 'Nikolay is an avid supporter of maximizing performance in web applications. After his introduction to Phalcon, he decided to pursue and use the project and become an Evangelist for it. He is leading the effort toward the Russian community and offers resources for Russian speaking developers.',
        'team_nikolay_5'                  => "His contributions include: A mirror of the main website in Russian (<a href=':1:'>http://www.phalconphp.ru</a>), a mirror of the documentation repository in Russian (<a href=':2:'>http://docs.phalconphp.ru</a>), ongoing changes and corrections to the documentation in English, a group in the social network Vkontakte (<a href=':3:'>http://vk.com/phalconphp</a>).",

        'get_involved'                    => 'Get Involved',
        'about_description_1'             => "Amazing projects need amazing hands. We might not know you just yet, but we think you'd be a great fit for building a better web. Together, we're ready to change the world! Here at Phalcon, we’re building a new generation framework for PHP; we want to give you an amazing performance while helping you develop in an easy and fun way.",
        'about_description_2'             => 'We hope that you enjoy Phalcon as much as we do. Our arms are always open to receive your collaboration on the many things a project like this requires:',
        'about_translations_1'            => "We are trying to reach as many developers as possible, breaking down the language barriers. We are using <a href=':1:'>:2:</a>, to handle all the words or sentences that need to be translated for this site. The project repository is located <a href=':3:'>here</a> and below you can see the current status of our translation efffort.",
        'documentation_upper'             => 'DOCUMENTATION',
        'about_documentation_1'           => 'The repository of this website is available on github. Feel free to improve the redaction, fix typos, add examples, add articles, etc. Also, if you can translate some of the content to another language, it will be very much appreciated!',
        'screencasts'                     => 'Screencasts',
        'about_screencasts_1'             => "We all love screencasts. If you have some extra time and want to support the community with some nice videos teaching any of the framework's features, it's very welcome. Check out our <a href=':1:'>Vimeo Channel</a> as a guide.",
        'tests'                           => 'Tests',
        'about_tests_1'                   => "No software is free of bugs. If you find any, please do not hesitate to tell us. We have a testsuite with more than <a href=':1:'>8000</a> tests. However, unit-tests are never enough. Help us improve our testsuite by adding more tests or improve the current ones. Every added test makes the framework more stable.",
        'sample_applications'             => 'Sample Applications',
        'about_sample_apps_1'             => 'Big examples help others to better understand how big things can be created with Phalcon. Feel free to share repositories to sample applications helping others with their work and allow others to give you feedback about your work too!',
        'evangelism'                      => 'Evangelism',
        'about_evangelism_1'              => "There are a lot of people who still don’t know that Phalcon exists or that it really works. We are certain that many developers will benefit from hearing what Phalcon is all about and how it can help them. If you know of any PHP events/meetings and you wish to give a talk about the project, you have our full support. Who wouldn't want to know about the tool that is revolutionizing PHP development?",
        'share_your_experiences'          => 'Share your experiences',
        'about_share_experiences_1'       => "Don’t be shy, feel free to share the ways through which Phalcon was useful to you with the community. If Phalcon is a success case for you, let us share that with the community. Also, discuss what components needed extra work, what you could do easier, what benefits you got by using Phalcon. Although not everything can be implemented immediately, your input on new feature requests can greatly help us shape the future of the project. Your feedback helps us all.",
        'about_blog_1'                    => "If you like writing, remember that <a href=':1:'>our blog</a> is open to post tutorials created by you. If you have a blog of your own and have written something about Phalcon, we can also publish in our social network pages so as to achieve maximum visibility. If your blog post is in a language other than English, we want to share it and potentially translate it if possible. If you know about blogs related to PHP that are interested in presenting the project to its audience please let us know.",
        'donations_sponsoring'            => 'Donations / Sponsoring',
        'about_sponsoring_1'              => "We’re a tiny but effective core team of developers working our tails off. We try to spend as much time as possible on the project. All our passion for this project makes us want to be better every day. Phalcon is open-sourced software and volunteer efforts are needed for its constant evolution. You can help us keep the development active by donating to the project or sponsoring the development. More time and resources dedicated to the project means more activity, more improvement, better support, more amazing features, etc.",
        'social_networks'                 => 'Social Networks',
        'about_social_networks_1'         => "Phalcon is evolving on a daily basis, through our desire to make it better. Social networks are part of our lives now, and we all interact with others through them. Sharing your Phalcon experience with your social circles will greatly increase the visibility of the project. More and more people will engage in our community, thus making it more powerful, even more feature rich and popular. Like, '+1', share posts that we constantly post on every social network, engage in discussions regarding those posts. People who discover Phalcon through your interactions will thank you!",
        'about_social_networks_2'         => "We have a presence in most of the popular social networks. By following us, you are helping us increase the project's visibility:",
        'follow_on_twitter'               => 'Follow us on Twitter',
        'facebook_page'                   => 'Facebook Page',
        'google_plus_page'                => 'Google+ Page',
        'official_blog'                   => 'Official Blog',
        'star_on_github'                  => 'Star the project on Github',
        'thank_you'                       => 'Thank You!',
        'about_thank_you_1'               => 'We would like to thank all of our contributors and members of the community for pushing us to make Phalcon the best framework of its kind. Your kind words and engagement is what drives us to do better. We hope to meet and exceed the trust you put in Phalcon.',
        'flying_with_phalcon'             => 'Thanks for flying with Phalcon! &lt;3',

        'hosting_description'             => 'Phalcon can be installed on any machine on which the hosting provider offers SSH root access (or sudo). Below is a list of reputable companies that offer such services:',
        'hosting_fortrabbit_1'            => 'Fortrabbit offers many hosting plans (there is one for developers and is free - with some limitations) that would satisfy the needs of most of the developers that wish to either try Phalcon or deploy their applications using it.',
        'hosting_fortrabbit_2'            => "They offer a variety of <a href=':1:'>extensions</a> that would satisfy even the most demanding project.",
        'hosting_fortrabbit_3'            => 'Stable versions of Phalcon are pre-installed, you can activate them from the administration dashboard.',
        'hosting_webfaction_1'            => 'WebFaction Hosting for developers. Full shell access to fast servers with all your favorite tools pre-installed and maintained for the user.',
        'hosting_webfaction_2'            => "To install PhalconPHP in WebFaction, follow the instructions outlined <a href=':1:'>here</a>",
        'hosting_amazon_ec2_1'            => 'Amazon Elastic Compute Cloud delivers scalable, pay-as-you-go compute capacity in the cloud.',
        'hosting_amazon_ec2_2'            => "Select a pre-configured, templated Amazon Machine Image (AMI) to get up and running immediately. Or create an AMI containing your applications, libraries, data, and associated configuration settings. <a href=':1:'>See more</a>",
        'hosting_linode_1'                => "Deploy and Manage Linux Virtual Servers in the Linode Cloud. Get a server running in seconds with your choice of Linux distro, resources, and node location. <a href=':1:'>See more</a>",
        'hosting_digital_ocean_1'         => "Blazing Fast Cloud Technology. Built for developers. Deploy an SSD cloud server in 55 seconds. <a href=':1:'>See more</a>",
        'hosting_rackspace_1'             => "Cloud Servers are virtual machines running Linux or Windows&reg; Server in the Rackspace Cloud. You can scale resources like CPU, memory, and storage up or down, depending on your needs. Best of all, you can pay as you go. <a href=':1:'>See more</a>",
        'hosting_install_instructions'    => 'Install Phalcon using the standard instructions of installation.',





    );

    // return $messages;