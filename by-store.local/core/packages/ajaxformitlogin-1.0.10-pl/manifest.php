<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'changelog' => '1.0.10-pl
==============
- Аdded support for old metrica counters
- Fixed a bug with session clogging

1.0.9-pl
==============
- Fixed a bug with user activation
- Fixed a bug with wrong notify on failed authorization
- Removed validator UserExists

1.0.8-pl
==============
- Fixed a bug with authorization

1.0.7-pl
==============
- Code of the ActivateUser snippet has been moved to the class ajaxidentification.class.php
- Added initialization of the OnUserActivate event.
- Added system settings ajaxformitlogin_antispam_js_event and ajaxformitlogin_antispam_fieldname
- Removed default parameter validate for snippet AjaxFormItLogin

1.0.6-pl
==============
- Added the ability to display validation errors without changing the layout

1.0.5-pl
==============
- Fix bugs
- Added automatic sending of goals to yandex
- Added JS event afl_init

1.0.3-pl
==============
- Added default parameters for the AjaxFormItLogin snippet
- Added auto-loading of pdoTools and FormIt
- Renamed some snippets and chunks

1.0.2-pl
==============
- Fixed the error of creating system settings.

1.0.1-pl
==============
- Fixed a typo in the parameter.

1.0.0-pl
==============
- First stable build.


1.0.0-beta
==============
- Initial release.
',
    'license' => 'GNU GENERAL PUBLIC LICENSE
   Version 2, June 1991
--------------------------

Copyright (C) 1989, 1991 Free Software Foundation, Inc.
59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

Everyone is permitted to copy and distribute verbatim copies
of this license document, but changing it is not allowed.

Preamble
--------

  The licenses for most software are designed to take away your
freedom to share and change it.  By contrast, the GNU General Public
License is intended to guarantee your freedom to share and change free
software--to make sure the software is free for all its users.  This
General Public License applies to most of the Free Software
Foundation\'s software and to any other program whose authors commit to
using it.  (Some other Free Software Foundation software is covered by
the GNU Library General Public License instead.)  You can apply it to
your programs, too.

  When we speak of free software, we are referring to freedom, not
price.  Our General Public Licenses are designed to make sure that you
have the freedom to distribute copies of free software (and charge for
this service if you wish), that you receive source code or can get it
if you want it, that you can change the software or use pieces of it
in new free programs; and that you know you can do these things.

  To protect your rights, we need to make restrictions that forbid
anyone to deny you these rights or to ask you to surrender the rights.
These restrictions translate to certain responsibilities for you if you
distribute copies of the software, or if you modify it.

  For example, if you distribute copies of such a program, whether
gratis or for a fee, you must give the recipients all the rights that
you have.  You must make sure that they, too, receive or can get the
source code.  And you must show them these terms so they know their
rights.

  We protect your rights with two steps: (1) copyright the software, and
(2) offer you this license which gives you legal permission to copy,
distribute and/or modify the software.

  Also, for each author\'s protection and ours, we want to make certain
that everyone understands that there is no warranty for this free
software.  If the software is modified by someone else and passed on, we
want its recipients to know that what they have is not the original, so
that any problems introduced by others will not reflect on the original
authors\' reputations.

  Finally, any free program is threatened constantly by software
patents.  We wish to avoid the danger that redistributors of a free
program will individually obtain patent licenses, in effect making the
program proprietary.  To prevent this, we have made it clear that any
patent must be licensed for everyone\'s free use or not licensed at all.

  The precise terms and conditions for copying, distribution and
modification follow.


GNU GENERAL PUBLIC LICENSE
TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION
---------------------------------------------------------------

  0. This License applies to any program or other work which contains
a notice placed by the copyright holder saying it may be distributed
under the terms of this General Public License.  The "Program", below,
refers to any such program or work, and a "work based on the Program"
means either the Program or any derivative work under copyright law:
that is to say, a work containing the Program or a portion of it,
either verbatim or with modifications and/or translated into another
language.  (Hereinafter, translation is included without limitation in
the term "modification".)  Each licensee is addressed as "you".

Activities other than copying, distribution and modification are not
covered by this License; they are outside its scope.  The act of
running the Program is not restricted, and the output from the Program
is covered only if its contents constitute a work based on the
Program (independent of having been made by running the Program).
Whether that is true depends on what the Program does.

  1. You may copy and distribute verbatim copies of the Program\'s
source code as you receive it, in any medium, provided that you
conspicuously and appropriately publish on each copy an appropriate
copyright notice and disclaimer of warranty; keep intact all the
notices that refer to this License and to the absence of any warranty;
and give any other recipients of the Program a copy of this License
along with the Program.

You may charge a fee for the physical act of transferring a copy, and
you may at your option offer warranty protection in exchange for a fee.

  2. You may modify your copy or copies of the Program or any portion
of it, thus forming a work based on the Program, and copy and
distribute such modifications or work under the terms of Section 1
above, provided that you also meet all of these conditions:

    a) You must cause the modified files to carry prominent notices
    stating that you changed the files and the date of any change.

    b) You must cause any work that you distribute or publish, that in
    whole or in part contains or is derived from the Program or any
    part thereof, to be licensed as a whole at no charge to all third
    parties under the terms of this License.

    c) If the modified program normally reads commands interactively
    when run, you must cause it, when started running for such
    interactive use in the most ordinary way, to print or display an
    announcement including an appropriate copyright notice and a
    notice that there is no warranty (or else, saying that you provide
    a warranty) and that users may redistribute the program under
    these conditions, and telling the user how to view a copy of this
    License.  (Exception: if the Program itself is interactive but
    does not normally print such an announcement, your work based on
    the Program is not required to print an announcement.)

These requirements apply to the modified work as a whole.  If
identifiable sections of that work are not derived from the Program,
and can be reasonably considered independent and separate works in
themselves, then this License, and its terms, do not apply to those
sections when you distribute them as separate works.  But when you
distribute the same sections as part of a whole which is a work based
on the Program, the distribution of the whole must be on the terms of
this License, whose permissions for other licensees extend to the
entire whole, and thus to each and every part regardless of who wrote it.

Thus, it is not the intent of this section to claim rights or contest
your rights to work written entirely by you; rather, the intent is to
exercise the right to control the distribution of derivative or
collective works based on the Program.

In addition, mere aggregation of another work not based on the Program
with the Program (or with a work based on the Program) on a volume of
a storage or distribution medium does not bring the other work under
the scope of this License.

  3. You may copy and distribute the Program (or a work based on it,
under Section 2) in object code or executable form under the terms of
Sections 1 and 2 above provided that you also do one of the following:

    a) Accompany it with the complete corresponding machine-readable
    source code, which must be distributed under the terms of Sections
    1 and 2 above on a medium customarily used for software interchange; or,

    b) Accompany it with a written offer, valid for at least three
    years, to give any third party, for a charge no more than your
    cost of physically performing source distribution, a complete
    machine-readable copy of the corresponding source code, to be
    distributed under the terms of Sections 1 and 2 above on a medium
    customarily used for software interchange; or,

    c) Accompany it with the information you received as to the offer
    to distribute corresponding source code.  (This alternative is
    allowed only for noncommercial distribution and only if you
    received the program in object code or executable form with such
    an offer, in accord with Subsection b above.)

The source code for a work means the preferred form of the work for
making modifications to it.  For an executable work, complete source
code means all the source code for all modules it contains, plus any
associated interface definition files, plus the scripts used to
control compilation and installation of the executable.  However, as a
special exception, the source code distributed need not include
anything that is normally distributed (in either source or binary
form) with the major components (compiler, kernel, and so on) of the
operating system on which the executable runs, unless that component
itself accompanies the executable.

If distribution of executable or object code is made by offering
access to copy from a designated place, then offering equivalent
access to copy the source code from the same place counts as
distribution of the source code, even though third parties are not
compelled to copy the source along with the object code.

  4. You may not copy, modify, sublicense, or distribute the Program
except as expressly provided under this License.  Any attempt
otherwise to copy, modify, sublicense or distribute the Program is
void, and will automatically terminate your rights under this License.
However, parties who have received copies, or rights, from you under
this License will not have their licenses terminated so long as such
parties remain in full compliance.

  5. You are not required to accept this License, since you have not
signed it.  However, nothing else grants you permission to modify or
distribute the Program or its derivative works.  These actions are
prohibited by law if you do not accept this License.  Therefore, by
modifying or distributing the Program (or any work based on the
Program), you indicate your acceptance of this License to do so, and
all its terms and conditions for copying, distributing or modifying
the Program or works based on it.

  6. Each time you redistribute the Program (or any work based on the
Program), the recipient automatically receives a license from the
original licensor to copy, distribute or modify the Program subject to
these terms and conditions.  You may not impose any further
restrictions on the recipients\' exercise of the rights granted herein.
You are not responsible for enforcing compliance by third parties to
this License.

  7. If, as a consequence of a court judgment or allegation of patent
infringement or for any other reason (not limited to patent issues),
conditions are imposed on you (whether by court order, agreement or
otherwise) that contradict the conditions of this License, they do not
excuse you from the conditions of this License.  If you cannot
distribute so as to satisfy simultaneously your obligations under this
License and any other pertinent obligations, then as a consequence you
may not distribute the Program at all.  For example, if a patent
license would not permit royalty-free redistribution of the Program by
all those who receive copies directly or indirectly through you, then
the only way you could satisfy both it and this License would be to
refrain entirely from distribution of the Program.

If any portion of this section is held invalid or unenforceable under
any particular circumstance, the balance of the section is intended to
apply and the section as a whole is intended to apply in other
circumstances.

It is not the purpose of this section to induce you to infringe any
patents or other property right claims or to contest validity of any
such claims; this section has the sole purpose of protecting the
integrity of the free software distribution system, which is
implemented by public license practices.  Many people have made
generous contributions to the wide range of software distributed
through that system in reliance on consistent application of that
system; it is up to the author/donor to decide if he or she is willing
to distribute software through any other system and a licensee cannot
impose that choice.

This section is intended to make thoroughly clear what is believed to
be a consequence of the rest of this License.

  8. If the distribution and/or use of the Program is restricted in
certain countries either by patents or by copyrighted interfaces, the
original copyright holder who places the Program under this License
may add an explicit geographical distribution limitation excluding
those countries, so that distribution is permitted only in or among
countries not thus excluded.  In such case, this License incorporates
the limitation as if written in the body of this License.

  9. The Free Software Foundation may publish revised and/or new versions
of the General Public License from time to time.  Such new versions will
be similar in spirit to the present version, but may differ in detail to
address new problems or concerns.

Each version is given a distinguishing version number.  If the Program
specifies a version number of this License which applies to it and "any
later version", you have the option of following the terms and conditions
either of that version or of any later version published by the Free
Software Foundation.  If the Program does not specify a version number of
this License, you may choose any version ever published by the Free Software
Foundation.

  10. If you wish to incorporate parts of the Program into other free
programs whose distribution conditions are different, write to the author
to ask for permission.  For software which is copyrighted by the Free
Software Foundation, write to the Free Software Foundation; we sometimes
make exceptions for this.  Our decision will be guided by the two goals
of preserving the free status of all derivatives of our free software and
of promoting the sharing and reuse of software generally.

NO WARRANTY
-----------

  11. BECAUSE THE PROGRAM IS LICENSED FREE OF CHARGE, THERE IS NO WARRANTY
FOR THE PROGRAM, TO THE EXTENT PERMITTED BY APPLICABLE LAW.  EXCEPT WHEN
OTHERWISE STATED IN WRITING THE COPYRIGHT HOLDERS AND/OR OTHER PARTIES
PROVIDE THE PROGRAM "AS IS" WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESSED
OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE.  THE ENTIRE RISK AS
TO THE QUALITY AND PERFORMANCE OF THE PROGRAM IS WITH YOU.  SHOULD THE
PROGRAM PROVE DEFECTIVE, YOU ASSUME THE COST OF ALL NECESSARY SERVICING,
REPAIR OR CORRECTION.

  12. IN NO EVENT UNLESS REQUIRED BY APPLICABLE LAW OR AGREED TO IN WRITING
WILL ANY COPYRIGHT HOLDER, OR ANY OTHER PARTY WHO MAY MODIFY AND/OR
REDISTRIBUTE THE PROGRAM AS PERMITTED ABOVE, BE LIABLE TO YOU FOR DAMAGES,
INCLUDING ANY GENERAL, SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGES ARISING
OUT OF THE USE OR INABILITY TO USE THE PROGRAM (INCLUDING BUT NOT LIMITED
TO LOSS OF DATA OR DATA BEING RENDERED INACCURATE OR LOSSES SUSTAINED BY
YOU OR THIRD PARTIES OR A FAILURE OF THE PROGRAM TO OPERATE WITH ANY OTHER
PROGRAMS), EVEN IF SUCH HOLDER OR OTHER PARTY HAS BEEN ADVISED OF THE
POSSIBILITY OF SUCH DAMAGES.

---------------------------
END OF TERMS AND CONDITIONS',
    'readme' => '--------------------
AjaxFormitLogin
--------------------
Author: Shevchenko Artur <shev.art.v@yandex.ru>
--------------------

Simple component for MODX Revolution, that allows you to send any form through ajax.

!!!ВАЖНО!!! При установке компонент так же будут установлены pdoTools и FormIt. При этом нужно самостоятельно включить Fenom на страницах. Для этого в системных настройках нужно найти ключ pdotools_fenom_parser и установить значение ДА.

Отличия от AjaxForm:
1. Нет jQuery.
2. Для показа уведомлений используется библиотека IziToast.
3. Принимает параметр clearFieldsOnSuccess, тем самым позволяя управлять очисткой полей при успешной оправке формы.
4. Принимает параметр transmittedParams (значение должно быть валидным JSON), который позволяете передавать в JS кастомные параметры отдельно при успешной, отдельно при неудачной отправке.
5. Позволяет отображать процесс загрузки файлов на сервер, для этого нужно указать параметр showUploadProgress со значением 1.
6. Событие af_complete заменено на afl_complete.
<code>
document.addEventListener(\'afl_complete\', e => {
    console.log(e.detail.response); // ответ сервера
    console.log(e.detail.form); // текущая форма
});
</code>
7. Изменен формат ответа сервера.
8. Работают редиректы. Для этого необходимо указать параметр redirectTo (абсолютная ссылка или ID ресурса) и, при необходимости изменить стандартное значение в 2с, redirectTimeout (в милисекундах) для задания задержки перед переходом на другую страницу.
9. Добавлен метод помогающий валидировать чекбоксы. Для его работы необходимо проверяемому чекбоксу добавить атрибут data-afl-required, где значением будет ключ указанный в параметре validate, а также нужно добавить скрытое поле с этим именем в форму. Самому чекбоксу имя можно не указывать.
10. Нет поддержки капчи от гугла, но встроена собственная защита от спама по методу Алексея Смирнова. Для активации нужно в вызове указать параметр spamProtection со значением 1.
11. Есть возможность регистрации, авторизации, сброса пароля и редактирования личных данных, при условии установки компонента FormIt. Подробнее о поддерживаемых параметрах можно прочитать <a href="https://modx.pro/solutions/22936">в этой заметке</a>
12. При обновлении данных пользователя добавлено системное событие aiOnUserUpdate, которое получает следующие данные $user - объект обновленного пользователя, $profile - его профиль, $data - переданные данные.
13. Есть автоматическая отправка целей в Яндекс.Метрику. Чтобы это работало нужно установить системную настройку afl_metrics в значение ДА. Указать в системной настройке afl_counter_id идентификатор используемого на сайте счётчика метрики. Вставить код самого счётчика на сайт. Добавить в вызов сниппет параметр ym_goal, в котором нужно указать имя JS цели из Яндекс.Метрики.

Возможные сценарии использования (в скобках указан путь к файлу с примером, который будет загружен вместе с компонентом):
1. Отправка формы еа указанный email (core/components/ajaxformitlogin/elements/templates/index.tpl);
2. Регистрация пользователя на сайте (core/components/ajaxformitlogin/elements/templates/register.tpl);
3. Авторизация пользователя на сайте (core/components/ajaxformitlogin/elements/templates/auth.tpl);
4. Сброс пароля (core/components/ajaxformitlogin/elements/templates/forgot.tpl);
5. Редактирование данных пользователя (core/components/ajaxformitlogin/elements/templates/personal_data.tpl);
6. Выход из аккаунта пользователя (core/components/ajaxformitlogin/elements/templates/personal_data.tpl);
7. Смена пароля (core/components/ajaxformitlogin/elements/templates/personal_data.tpl);
8. Активация пользователя (core/components/ajaxformitlogin/elements/templates/index.tpl);
9. Вызов любого сниппета через Ajax.
--------------------
Feel free to suggest ideas/improvements/bugs on GitHub:
https://github.com/ShevArtV/ajaxformitlogin/issues',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '16ffd5a5137adeeb91d635c237a1ad9a',
      'native_key' => 'ajaxformitlogin',
      'filename' => 'modNamespace/5ceae08390d8643bc75a59787c029ee2.vehicle',
      'namespace' => 'ajaxformitlogin',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '11bef9f10e4b243c328d1697ba36696b',
      'native_key' => 'ajaxformitlogin_frontend_js',
      'filename' => 'modSystemSetting/9729b1fa7d66beb962b8283a4c137be3.vehicle',
      'namespace' => 'ajaxformitlogin',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c0708fb70d9374ac29d9a033b31ddd75',
      'native_key' => 'ajaxformitlogin_notify_classname',
      'filename' => 'modSystemSetting/06e6ee81e42403d9586272fb0f8a0c9d.vehicle',
      'namespace' => 'ajaxformitlogin',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '32f7ab51a03d10a3b3db20e14b07e996',
      'native_key' => 'ajaxformitlogin_notify_classpath',
      'filename' => 'modSystemSetting/e2c1d2360e6adac27cc1b7e427f96f5a.vehicle',
      'namespace' => 'ajaxformitlogin',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'fb5eb28b425662e57202a4afa603a94c',
      'native_key' => 'ajaxformitlogin_notify_js',
      'filename' => 'modSystemSetting/44a76810b9e6e7cb4c08c8fb27296234.vehicle',
      'namespace' => 'ajaxformitlogin',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6d26da16a1bc5121bbd34688c6e2b1ae',
      'native_key' => 'ajaxformitlogin_metrics',
      'filename' => 'modSystemSetting/8b316ebab9b8bb78bb5ab1caa7b68436.vehicle',
      'namespace' => 'ajaxformitlogin',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9a9fa6b9fc0f85e55c61822b487bff46',
      'native_key' => 'ajaxformitlogin_counter_id',
      'filename' => 'modSystemSetting/dddea165d444ccf42ee30cd5d5238b06.vehicle',
      'namespace' => 'ajaxformitlogin',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7c88463db664b10df3e8c09c8fb3799d',
      'native_key' => 'ajaxformitlogin_antispam_fieldname',
      'filename' => 'modSystemSetting/7d5c2129cea80f3b521d189a68846f29.vehicle',
      'namespace' => 'ajaxformitlogin',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '469454bb0a7d2809cfe313b783e909e9',
      'native_key' => 'ajaxformitlogin_antispam_js_event',
      'filename' => 'modSystemSetting/f52f01d9b5962f1079520b4e0ea4fd5d.vehicle',
      'namespace' => 'ajaxformitlogin',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => '216092d89084d7dfdefe901ab05d5c33',
      'native_key' => NULL,
      'filename' => 'modCategory/4ff472b86d2e6dd879d493c71ff6ff2e.vehicle',
      'namespace' => 'ajaxformitlogin',
    ),
  ),
);