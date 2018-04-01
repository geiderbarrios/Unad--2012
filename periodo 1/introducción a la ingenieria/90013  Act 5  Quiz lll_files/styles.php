/**************************************
 * THEME NAME: standard
 *
 * Files included in this sheet:
 *
 *   standard/styles_layout.css
 *   /mod/assignment/styles.php
 *   /mod/choice/styles.php
 *   /mod/data/styles.php
 *   /mod/lesson/styles.php
 *   /mod/quiz/styles.php
 *   /mod/scorm/styles.php
 *   /mod/workshop/styles.php
 *   /blocks/admin/styles.php
 *   /blocks/blog_tags/styles.php
 *   /blocks/calendar_month/styles.php
 *   /blocks/calendar_upcoming/styles.php
 *   /blocks/course_summary/styles.php
 *   /blocks/login/styles.php
 *   /blocks/quiz_results/styles.php
 *   /blocks/rss_client/styles.php
 *   /blocks/search_forums/styles.php
 **************************************/

/***** standard/styles_layout.css start *****/

/*******************************************************************
 styles_layout.css

 This CSS file contains all layout definitions like positioning,
 floats, margins, padding, borders etc.

 Styles are organised into the following sections:
  core
  forms
  header
  footer

  admin
  blocks
  blog
  calendar
  course
  doc
  grades
  login
  message
  question
  tabs
  user

  various modules

*******************************************************************/


/***
 *** Core
 ***/

h1.main,
h2.main,
h3.main,
h4.main,
h5.main,
h6.main {
  text-align: center;
}

#layout-table {
  width:100%;
  border-collapse:separate;
  margin-top: 8px;
}

#layout-table #left-column,
#layout-table #middle-column,
#layout-table #right-column
{
  vertical-align:top;
}

#layout-table #middle-column {
  padding-left:12px;
  padding-right:12px;
}

.clearer {
  clear:both;
  margin:0px;
  padding:0px;
  height:1px;
  border:none;
  background:transparent;
  display:block;
}

.clearfix:after {
  /* content: "<!-- -->";  */
  content: ".";
  display: block;
  height: 0;
  clear: both;
  visibility: hidden;
}

.clearfix {
  /* display: inline-block */
  min-width: 0;
}

/* Hides from IE-mac \*/
* html .clearfix {height: 1%;}
.clearfix {display: block;}
/* End hide from IE-mac */

.mdl-align {
  text-align: center;
}

.continuebutton {
  text-align: center;
}

form {
  margin-bottom:0px;
}

table {
  border-spacing: 0px;
  border-collapse: collapse;
}

a img {
  border:none;
}

img.userpicture,
img.grouppicture,
.block_online_users .listentry img {
  border: 0px solid
}

.notifyproblem {
  text-align: center;
  padding: 10px;
}

.notifysuccess {
  text-align:center;
  padding: 10px;
}

.notifytiny {
  text-align:left;
  padding: 0px;
}

.generalbox {
  border-width:1px;
  border-style:solid;
  margin-bottom: 15px;
}

.generalbox#intro {
}

.noticebox {
  border-width:1px;
  border-style:solid;
}

.errorbox {
  border-width:1px;
  border-style:solid;
  margin: 1em 15%;
  width: 70%;
}

.errorbox .title {
  padding: 5px;
}

.informationbox {
  border-width:1px;
  border-style:solid;
}

.feedbackbox {
  border-width:1px;
  border-style:solid;
}

.feedbackby {
}

.feedback {
}

.generaltable {
  border-width: 1px;
  border-style: solid;
}

.generaltable .cell {
  border-width: 1px;
  border-style: solid;
  border-collapse: collapse;
}

.initialbar {
  text-align: center;
}

#help .indent {
  margin-left:3em;
}

.tabledivider {
  border-width:1px;
  border-style:solid;
  border-left:0px;
  border-right:0px;
  border-top:0px;
}

.sitetopic {
  margin-bottom:20px;
}

.sitetopiccontent {
  border-width:1px;
  border-style:solid;
}

.pagingbar {
  text-align:center;
}

.pagingbar a {
  padding-left: 10px;
}

.pagingbar .thispage {
  padding-left: 10px;
}

table.formtable {
  margin: auto;
}

table.formtable tbody th {
  vertical-align: top;
}

table.formtable tbody td,
table.formtable tbody th
{
  padding: 5px;
}

table.formtable tbody .htmlarea td,
table.formtable tbody .htmlarea th
{
  padding: 0px;
}

.paging {
  text-align: center;
  margin: 10px 0px 10px 0px;
}

.unread {
  padding-right:2px;
}

.cell {
  vertical-align: top;
}

.helplink img {
  vertical-align: middle;
  margin: 0px 2px;
  width: 17px;
  height: 17px;
}

img.emoticon {
  vertical-align: middle;
  width: 15px;
  height: 15px;
}

form.popupform {
  display: inline;
}

/*Accessibility: text 'seen' by screen readers but not visual users. Fixed for RTL languages, example Farsi. */
.accesshide {
  position:absolute;
  top:-1000px;
  left:10px;
  font-weight:normal;
  font-size:1em;
}
span.hide,
div.hide {
  display:none;
}

/***
 *** Forms
 ***/

form.mform {
  margin: 0 auto;
  padding: 0;
  width: 80%;
}
form.mform fieldset {
  border: 1px solid #DDDDDD;
  padding: 10px 0;
  margin: 0.7em 0;
  width:100%;
}
form.mform fieldset.hidden, form.mform fieldset.felement {
  border: 0;
}
form.mform fieldset.felement {
  width: auto;
}
form.mform fieldset legend {
  font-weight: bold;
  margin-left: 0.5em;
}
form.mform fieldset .advancedbutton{
   width:100%;
   text-align:right;
}
form.mform div.fitem {
  clear: both;
  width: 100%;
  min-height: 1.5em;
}

form.mform .fitemtitle {
  display: block;
  float: left;
  width: 30%;
  padding: 0;
  margin: 5px 0 0 10px;
  text-align: right;
}

form.mform .fitemtitle div{
  display: inline;
}

div.fitem fieldset.fgroup label, div.fradio label,  div.fcheckbox label,
fieldset.fdate_selector label {
  display:inline;
  float: none;
  width: auto;
}

form.mform div.felement,  form.mform fieldset.felement{
  display: block;
  float: left;
  margin: 5px 0 0 10px;
  padding: 0;
  text-align:left;
  width: 60%;
}

form.mform div.fdescription {
  clear: both;
  min-height: 1.5em;
}

form.mform .fdescription.required {
  text-align:right;
}

form.mform input, form.mform select {
  width: auto;
}
form.mform ftextarea {
}
form.mform br {
  clear: left;
}
form.mform div.fhtmleditor {
  margin: 0 auto 10px auto;
  width : 600px;
  clear:both;
  float:none;
  padding: 25px 0 20px 0;
}
form.mform span.error, form.mform span.required {
  color: red;
}
form.mform div.error,form.mform fieldset.error {
  border: 1px solid red;
  padding: 5px;
  color: inherit;
}

.mform label .req, .mform label .adv {
  cursor: help;
}


form#adminsettings div.htmlarea {
  clear: left;
  padding-top: 5px;
}


/***
 *** Header
 ***/

.headerskip {
  position:absolute;
  right:20em;
  font-size:0.8em;
}

#header-home {
}

#header {
}

.headermain, h1.headermain {
  float:left;
  margin:0%;
  padding:0%;
}

.headermenu {
  float:right;
  text-align:right;
}

.navbar {
  width:auto;
  padding:3px 0.5em;
  border-width:1px;
  border-style:solid;
}

table.navbar {
  width: 100%;
}

.navbar .navbutton form {
  float: left;
}

.navbar .navbutton {
  margin-top: 3px;
}

.navbar .breadcrumb {
  float:left;
  margin:0.2em 0em;
}

.breadcrumb ul {
  padding:0%;
  margin:0%;
  text-indent:0%;
  list-style:none;
}
.breadcrumb li {
  display:inline;
}

.navbar .navbutton,
.navbar .menu {
  float:right;
}

#footer .navbar {
  margin-top: 4em;
}

.reportlink {
  text-align:right;
}


/***
 *** Footer
 ***/

#footer {
  text-align:center;
  margin-top: 40px;
}

.homelink {
  margin: 1em 0;
}

.homelink a {
  padding-left:1em;
  padding-right:1em;
}

.performanceinfo {
  margin: 2em;
}

.performanceinfo span {
  display: block;
}

/***
 *** Admin
 ***/

body#admin-index .c0 {
  vertical-align: top;
}

body#admin-index .c1 {
  vertical-align: middle;
}

body#admin-modules table.generaltable td.cell,
body#admin-modules .generaltablecell {
  padding-top: 2px;
  padding-bottom: 2px;
}

body#admin-blocks table#blocks,
body#admin-blocks table#incompatible {
  width: 70%;
  margin: auto;
}

body#admin-blocks table#blocks th,
body#admin-blocks table#incompatible th,
body#admin-blocks table#blocks td.cell,
body#admin-blocks table#incompatible td.cell {
  padding: 4px;
  text-align: center;
  vertical-align: middle;
}

body#admin-blocks table#blocks td.c0,
body#admin-blocks table#blocks th.c0,
body#admin-blocks table#incompatible td.c0,
body#admin-blocks table#incompatible th.c0 {
  text-align: left;
}

body#admin-blocks
body#admin-config .confighelp {
  display: block;
  padding-bottom: 20px;
}

body#admin-roles-manage table.generalbox {
  margin: auto;
}

#admin-report-simpletest-index .exception pre {
  padding: 8px;
}

#admin-report-simpletest-index .unittestsummary {
  padding: 8px;
  margin-top: 1em;
}

#admin-roles-manage .singlebutton,
#admin-roles-allowoverride .singlebutton,
#admin-roles-allowassign .singlebutton {
  padding: 10px;
  text-align:center;
}

.rolecap .inherit,
.rolecap .allow,
.rolecap .prevent,
.rolecap .prohibit {
  text-align:center;
}

#admin-roles-manage .rolecap .cap-desc .cap-name,
#admin-roles-override .rolecap .cap-desc .cap-name {
  display: block;
}

#admin-roles-override .cell.c1,
#admin-roles-assign .cell.c1 {
  padding-top: 0.75em;
}

#adminsettings fieldset {
  margin-top: 1em;
  padding: 1em 0.5em;
}

#adminsettings legend {
  display: none;
}

#adminsettings .form-group {
  float: left;
}

#adminsettings .form-item {
  margin: 0;
}

#adminsettings label {
  display: block;
  float: left;
  width: 150px;
  text-align: right;
}

#adminsettings .form-shortname {
  display: block;
}

#adminsettings select,
#adminsettings input {
  float: left;
  margin: 0 0 0 10px;
}

#adminsettings textarea {
  float: left;
  margin: 0 0 0 10px;
  width: 65%;
}

#adminsettings .form-group select,
#adminsettings .form-group input {
  display: inline;
  float: none;
}

/* #adminsettings .admin-configtime .form-select {
  display: inline;
  float: none;
}

#adminsettings div.admin-frontpage div.form-group select.form-select {
  display: inline;
  float: none;
} */

#adminsettings .description {
  clear: both;
  margin: 0 1em 0 160px;
  padding: 0.3em 0 1.5em 0;
}

.form-buttons {
  margin: 10px 0 0 160px;
}

.form-text {
  width: 20em;
}
.form-textarea { }
.form-select { }
.form-checkbox { }
.form-radio { }
.form-submit { }
.form-reset { }

.admin-frontpagedesc .htmlarea {
  margin: 0 auto 10px auto;
  width : 600px;
}

.adminsearchform {
  padding-top:10px;
}

#adminsettings #admin-calendar_weekend table {
  width: 100%;
}

#adminsettings #admin-calendar_weekend table td {
  text-align: center;
}

#adminsettings #admin-calendar_weekend table td label {
  width: 100%;
  text-align: center;
  float: none;
}


/***
 *** Blocks
 ***/

/*Accessibility: Skip block link, for screen reader users. */
a.skip-block, .skip-block {
  display:block;
  width:2em;
  height:1px;
}
.sideblock .skip-block {
  height:4px;
}
.skip-block-to {
  font-size:1px;
}

.sideblock li .icon img {
  width:16px;
  height:16px;
}

ul.list, ul.list li, ol.list, ol.list li {
  list-style-type:none;
  padding:0;
  margin:0;
  text-indent:0;
}

.sideblock .content h3,
.sideblock .content h2 {
  text-align: left;
}
/*.sideblock .content h3, ??*/
.sideblock .content h2 {
  margin:1.5em 0 0;
  padding:0;
}

.sideblock {
  margin-bottom:1em;
  width: 100%;
}

.sideblock .header, .sideblock h2.header {
  text-align: left;
  margin:0;
  padding:4px;
  padding-top:0;
  border-width: 1px;
  border-style: solid;
  border-bottom: none;
}
.sideblock h2 {
  margin:0;
  padding:0;
}

.sideblock .header .hide-show {
  float:right;
}

.sideblock .header .hide-show img.hide-show-image {
  height:11px;
  width:11px;
  margin-top:0.25em;
}

.sideblock .header .commands {
  margin-top: 0.3em;
  clear: both;
  height: 16px;
}

.sideblock .header .commands a {
  margin: 0px 2px;
}

.sideblock .content {
  padding: 4px;
  border-width: 1px;
  border-style: solid;
}

.sideblock .content hr {
  height:1px;
  margin-top:4px;
  margin-bottom:4px;
  border:none;
  border-top:1px solid;
}

#left-column .hidden .header,
#right-column .hidden .header
{
  border-bottom-width: 1px;
  border-bottom-style: solid;
}

#left-column .hidden .content,
#right-column .hidden .content
{
  display: none;
}

.sideblock .list {
  width: 100%;
}

.sideblock .list .c0{
  padding: 2px;
}

.sideblock .footer {
  margin-bottom: 4px;
  text-align:center;
}

.sideblock .header .icon.hide,
.sideblock .header .icon.edit {
  margin-right: 6px;
}

.sideblock .content .head {
  margin-top: 10px;
}

.sideblock .icon {
  display: block;
  float: left;
  margin-right: 0.3em;
}

.sideblock .list li {
  clear: left;
}

.blockconfigtable {
  margin-top: 0;
}

.blockconfiginstancecontent .tabs {
  margin-bottom: 0px;
}

.block_online_users .listentry {
  padding-top:5px;
}


/***
 *** Blogs
 ***/

.blogpost .audience {
  text-align: right;
}

.blogpost .tags {
  margin-top: 15px;
}


/***
 *** Calendar
 ***/

#calendar {
  width: 100%;
  border-spacing: 5px;
  border-collapse: separate;
}

#calendar h2,
#calendar h3
{
  text-align: center;
}

#calendar .maincalendar,
#calendar .sidecalendar
{
  vertical-align: top;
  border: 1px solid;
  padding: 0px;
}

#calendar .sidecalendar {
  width: 25%;
}

#calendar .maincalendar table.calendarmonth {
  border-collapse: separate;
  margin: 0px auto;
  width: 98%;
}

#calendar .maincalendar table.calendarmonth th {
  padding:10px;
  border-bottom:2px solid;
}

#calendar .maincalendar table.calendarmonth td {
  height: 5em;
  padding-left: 4px;
  padding-top: 4px;
  line-height:1.2em;
}

#calendar .maincalendar table.calendarmonth td,
table.minicalendar td,
table.minicalendar th {
  width:14%;
  vertical-align:top;
}
table.minicalendar td {
  text-align: center;
}
#calendar .maincalendar table.calendarmonth td table td {
  height: auto;
}

#calendar div.header
{
  padding: 5px;
}

#calendar .maincalendar .buttons {
  float: right;
}

#calendar .maincalendar .filters table,
#calendar .sidecalendar .filters table,
.sideblock.block_calendar_month .filters table
{
  border-collapse:separate;
  border-spacing: 2px;
  padding: 2px;
  width: 100%;
}

#calendar .maincalendar .filters {
  padding: 0px 10px;
}

#calendar .sidecalendar .filters {
  padding: 5px;
}

#calendar .maincalendar .controls {
  clear:both;
  padding:10px;
}

#calendar .maincalendar table.calendarmonth ul.events-new,
#calendar .maincalendar table.calendarmonth ul.events-underway
{
  padding:0px;
  margin:0px;
  list-style-type:none;
}

#calendar .maincalendar table.calendarmonth ul li {
  margin-top: 4px;
}

.minicalendarblock {
  padding: 0px 4px;
}

table.minicalendar {
  width: 100%;
  margin: 10px auto;
  padding:2px;
  border-width:1px;
  border-style:solid;
  border-collapse:separate;
  border-spacing:1px !important;
}

table.minicalendar th {
  padding: 0px 2px;
}

#calendar .maincalendar .eventlist {
  padding: 10px;
}

#calendar .maincalendar .eventlist .topic {
  padding: 5px;
  border-style:solid;
  border-width: 0px;
  border-bottom-color: #EEEEEE;
  border-bottom-width: 1px;
}

#calendar .maincalendar .eventlist .event {
  width:100%;
  margin-bottom:10px;
  border-spacing:0px;
  border-collapse:separate;
  border-width:1px;
  border-style:solid;
}

#calendar .maincalendar .eventlist .event .name {
  float:left;
}

#calendar .maincalendar .eventlist .event .course {
  float:left;
  clear:left;
}

#calendar .maincalendar .eventlist .event .date {
  float:right;
}

#calendar .maincalendar .eventlist .event .description .commands {
  width:100%;
}

#calendar .maincalendar .eventlist .event .description {
  padding:5px;
}

#calendar .maincalendar .eventlist .event .picture {
  padding:8px;
}

#calendar .maincalendar .eventlist .event .side {
  width:32px;
}

#calendar #selecteventtype table {
  margin:auto;
}

#calendar .event_global,
#calendar .event_course,
#calendar .event_group,
#calendar .event_user,
.minicalendar .event_global,
.minicalendar .event_course,
.minicalendar .event_group,
.minicalendar .event_user {
  border:2px solid !important;
}

#calendar .duration_global,
#calendar .duration_course,
#calendar .duration_group,
#calendar .duration_user,
.minicalendar .duration_global,
.minicalendar .duration_course,
.minicalendar .duration_group,
.minicalendar .duration_user
{
  border-top:2px solid !important;
  border-bottom:2px solid !important;
}

#calendar .today,
.minicalendar .today {
  border:2px solid;
}

.cal_popup_bg {
  padding:0px;
  margin:0px;
  border:1px solid;
}

.cal_popup_close {
  margin-right:5px;
}

.cal_popup_caption {
  border-width:0px 0px 1px 0px;
  border-style:solid;
  padding-bottom:2px;
}

/*Accessibility: controls now div and span, 20:58:20% or 12:74:12% */
.calendar-controls .previous,
.calendar-controls .next
{
  width: 12%;
}
.calendar-controls .previous {
  text-align: left;
}
.calendar-controls .current {
  text-align: center;
}
.calendar-controls .next {
  text-align: right;
}
span.previous, span.current, span.next {
  display: block;
  float: left;
}
span.current {
  width: 76%;
}

#calendar .maincalendar .calendar-controls .previous,
#calendar .maincalendar .calendar-controls .next
{
  width: 30%;
}
#calendar .maincalendar .calendar-controls .current {
  width: 40%;
}

#calendar .indent {
  padding-left: 20px;
}

/***
 *** Course
 ***/

.activitydate, .activityhead {
  text-align:center;
}

#course-view .section td {
  vertical-align:top;
}

#course-view .section td.content {
  padding:5px;
  border-style:solid;
  border-width:1px;
  border-left:0px;
  border-right:0px;
}

#course-view .section td.side {
  padding:5px;
  border-style:solid;
  border-width:1px;
}

#course-view .section td.left {
  border-right:0px;
  text-align:center;
  width: 1.5em;
}

#course-view .section td.right {
  border-left:0px;
  text-align:center;
  width: 1.5em;
}

#course-view .current .side {
}

#course-view .section .spacer {
  height:0.5em;
}

#course-view .section .weekdates {
}

#course-view ul.section,
#site-index ul.section,
#course-view ul.section li,
#site-index ul.section li {
  margin: 0;
  padding: 0;
  text-indent: 0;
  list-style: none;
}

#course-view ul.section li.activity ul li,
#site-index ul.section li.activity ul li {
  list-style: disc;
}

/*Accessibility: No-tables course format. */
#course-view ul.weekscss, .weekscss li {
  margin: 0;
  padding: 0;
  text-indent: 0;
  list-style: none;
}
/* Window-width: 800 pixels.
   IE doesn't support, see inline IE conditional comment. */
.weekscss-format {
  min-width: 763px;
}
.weekscss-format .block_adminblock select,
.weekscss-format .block_calendar_month .minicalendar {
  width: 100%;
  padding: 0;
}
.weekscss-format .block_calendar_month .minicalendar th,
.weekscss-format .block_calendar_month .minicalendar td {
  padding: 0.1em 0 0.1em 1px;
}
.weekscss-format #middle-column {
  margin: 0 12.5em 0 12.5em;
}
.weekscss-format #left-column,
.weekscss-format #right-column {
  width: 11.5em;
}
.weekscss-format #left-column {
  float: left;
}
.weekscss-format #right-column {
  float: right;
}
.weekscss li.section {
  margin-bottom: 0.5em;
  border-style:solid;
  border-width:1px;
}
.weekscss .content,
.weekscss .side {
  padding: 5px;
}
.weekscss .content {
  margin: 0 1.7em 0 1.7em;
}
.weekscss .right {
  width: 1.6em;
  float: right;
  text-align:center;
}

.section .activity img.activityicon {
  vertical-align:middle;
  height:16px;
  width:16px;
}

.section img.movetarget {
  height:16px;
  width:80px;
}

body#course-view .unread {
  margin-left: 3em;
}

body#course-view .sideblock.drag .header {
  cursor: move;
}

body#course-enrol .generalbox {
  margin-top: 20px;
}

body#course-enrol .coursebox {
  margin-top: 20px;
}

body#course-user .graph {
  text-align: center;
}

body#course-user .section,
body#course-user .content {
  margin-left: 30px;
  margin-right: 30px;
}

body#course-user .section {
  border-width:1px;
  border-style:solid;
  padding:10px;
  margin-bottom: 20px;
}

body#course-user .section h2 {
  margin-top: 0px;
}


.headingblock, h2.headingblock {
  border-width:1px;
  border-style:solid;
  padding:5px;
  margin:0%;
}

.headingblock .link {
  text-align:right;
}

body#site-index .headingblock,
body#course-view .headingblock {
  margin-bottom: 9px;
}

.coursebox {
  margin-bottom: 8px;
}

.categoryboxcontent,
.courseboxcontent {
  border-width:1px;
  border-style:solid;
}

.courseboxcontent .cost {
  padding-top: 20px;
}

.courseboxcontent ul.teachers li {
  list-style-type:none;
  padding:0;
  margin:0;
  text-indent:0;
}


/***
 *** Doc
 ***/

body#doc-contents h1 {
  margin: 1em 0px 0px 0px;
}

body#doc-contents ul {
  list-style-type: none;
  margin: 0px;
  padding: 0px;
  width: 90%;
}


/***
 *** Grades
 ***/

body#grade-index .grades {
  border-width:1px;
  border-style:solid;
  border-collapse: separate;
}

body#grade-index .grades td {
  border-width:0px 1px 0px 1px;
  border-style:solid;
  border-collapse: collapse;
}

body#grade-index .grades .header {
  vertical-align: top;
}

body#grade-index .grades .points,
body#grade-index .grades .percent,
body#grade-index .grades .weighted {
  text-align: right;
}

.backup-form-instances {
   margin:0px 20px 0px 20px;
}
.restore-form-instances {
   margin:0px 20px 0px 20px;
}

/***
 *** Login
 ***/

.loginbox {
  margin-top:15px;
}

.loginbox .content {
  border-width:1px;
  border-style:solid;
  padding:15px;
}

.loginform .c1,
.logintable .c1 {
  text-align: left;
}

.loginform .c1 input,
.logintable .c1 input {
  width: 6em;
}


/***
 *** Message
 ***/

.message .link {
  vertical-align:middle;
}

table.message .searchresults td {
  padding:5px;
  border-width:1px;
  border-style:solid;
  border-collapse:collapse;
  border-spacing:0px;
}
.message .summary .link {
  text-align:right;
}
.message .heading {
  text-align:center;
}

.message .note {
  text-align:center;
  padding:10px;
}

#message-user .commands span {
  margin-left:10px;
  margin-right:10px;
}

body#message-messages {
  padding:10px;
}


/***
 *** MyMoodle
 ***/

.my .courseboxcontent .overview .info {
  margin-left:20px;
}

.my .courseboxcontent .overview {
  margin-bottom:10px;
}


/***
 *** Question
 ***/

.que {
  width: 90%;
  text-align: left;
  margin: 10px auto 15px auto;
  border: 1px solid;
  clear: both;
}
.que .info {
  float: left;
  margin: 5px;
  width: 8%;
}
.que .grade {
  margin-top: 0.5em;
}
.que .content {
  float: right;
  margin: 5px;
  width: 88%;
}
.que .qtext {
  margin-bottom: 1.5em;
}
.que .ablock {
  margin: 0.7em 0 0.3em 0;
}
.que .prompt {
  float: left;
  width: 15%;
  height: 2em;
  padding-top: 0.3em;
}
.que .control {
  width: 5%;
}
.que .answer {
  float: left;
  width: 83%;
  margin-bottom: 0.5em;
}
.que .submit {
  position: relative;
  clear: both;
  float: left;
}
/* MSIE Hack */
* html .que .submit {
  float: none;
}
.multianswer .submit {
  margin-top: 1em;
}
.que .c0,
.que .c1 {
  padding: 0.3em 0 0.3em 0.3em;
  vertical-align: top;
}
.que .feedback {
  clear: both;
  padding: 0 0 0.3em 0.3em;
  margin-bottom: 0.5em;
  border: 1px solid;
}
.multichoice td.feedback {
  width: auto;
  vertical-align: top;
  padding-top: 0.3em;
  border-style: none;
}
.essay .feedback {
  border-style: none;
}
.multichoice .text {
  width: auto;
}
.calculated .answer,
.numerical .answer,
.shortanswer .answer,
.truefalse .answer {
  padding: 0.3em 0 0.3em 0.3em;
}
.calculated .answer input,
.numerical .answer input,
.shortanswer .answer input {
  width: 85%;
}
.truefalse .answer span {
  float: left;
  clear: left;
  padding: 0.2em 0;
}
.que .grading,
.que .comment,
.que .commentlink,
.que .generalfeedback,
.que .history {
  float: right;
  margin: 5px;
  width: 88%;
}

/***
 *** Logs
 ***/

.logtable td,
.logtable th {
  padding-left: 10px;
  padding-right: 10px;
}

.logtable th {
  text-align:left;
}

/***
 *** Tabs
 ***/

.tabs {
  width: auto;
  margin-bottom: 15px;
  border-collapse: collapse;
}

.tabs td {
  padding: 0px;
}

.tabs .side {
  width: 50%;
  border-style: solid;
  border-width: 0px 0px 1px 0px;
}

.tabrow {
  border-collapse:collapse;
  width:100%;
  margin: 1px 0px 0px 0px;
}

.tabrow td {
  padding:0 0 0px 14px;
  border-style: solid;
  border-width: 0px 0px 1px 0px;
}

.tabrow th {
  display:none;
}
.tabrow td .tablink {
  display:block;
  padding:10px 14px 4px 0px;
  text-align:center;
  white-space:nowrap;
  text-decoration:none;
}
.tabrow .last {
  display:block;
  padding:0px 1px 0px 0px;
}

.tabrow td.selected {
  border-width: 0px;
}


/***
 *** User
 ***/

.userinfobox {
  margin-bottom:5px;
  border-width: 1px;
  border-style: solid;
  border-collapse: separate;
}

.userinfobox .left {
  padding: 10px;
  width: 100px;
  vertical-align: top;
}

.userinfobox .content {
  padding: 10px;
  vertical-align: top;
}

.userinfobox .links {
  width: 100px;
  padding: 5px;
  vertical-align: bottom;
}

.userinfobox .list td {
  padding: 3px;
}

.userinfobox .username {
  padding-bottom: 20px;
}


table.userinfobox {
  width: 80%;
  margin-left: 10%;
  margin-right: 10%;
}

table.groupinfobox {
  width: 60%;
  margin-left: 20%;
  margin-right: 20%;
  border-width:1px;
  border-style:solid;
  margin-bottom: 20px;
}

.groupinfobox .left {
  padding: 10px;
  width: 100px;
  vertical-align: top;
}

body#user-index h2 {
  text-align: center;
}

body#user-index #longtimenosee,
body#user-index #showall {
  text-align: center;
}

body#user-index #showall {
  margin: 10px 0px;
}

body#user-index table#participants {
  margin: auto;
  width: 80%;
}

body#user-index table#participants td,
body#user-index table#participants th {
  vertical-align: middle;
  text-align: left;
  padding: 4px;
}

body#user-index table.controls {
  width: 100%;
}
body#user-index table.controls tr {
  vertical-align: top;
}
body#user-index table.controls td.right,
body#user-index table.controls td.left {
  padding: 4px;
}
body#user-index table.controls .right {
  text-align: right;
}
body#course-participation h2 {
  text-align:center;
}
body#course-participation #showall {
  text-align:center;
  margin: 10px 0px;
}
body#user-index .rolesform {
  text-align:center;
}

/***
 *** Modules: Assignment
 ***/

/***
 *** Modules: Chat
 ***/

#mod-chat-gui_header_js-jsupdate {
  margin:10px
}
#mod-chat-gui_header_js-jsupdate .chat-event,
#mod-chat-gui_header_js-jsupdate .chat-message {
  width:100%;
  padding:0;
  margin-top:7px
}
.chat-event .picture,
.chat-message .picture {
  width:40px;
  vertical-align:top;
}
.chat-event .text,
.chat-message .text {
  text-align: left;
}

/***
 *** Modules: Choice
 ***/

/***
 *** Modules: Forum
 ***/

.forumheaderlist,
.forumpost {
  border-width:1px;
  border-style:solid;
  border-collapse:separate;
}

.forumpost {
  margin-top: 15px;
}

.forumpost .topic {
  padding: 4px;
  border-style:solid;
  border-width: 0px;
  border-bottom-width: 1px;
}

.forumpost .commands {
  padding-top: 0.5em;
  text-align:right;
  clear: both;
}

.forumpost .ratings {
  padding-top: 1em;
  text-align:right;
}

.forumpost .attachments {
  padding: 7px;
  text-align:right;
}

.forumpost .content {
  padding: 4px;
}

.forumpost .footer {
  padding-top: 0.5em;
  text-align:right;
}

.forumpost .link {
  padding-top: 0.5em;
  text-align:right;
}

.forumpost .left {
  width: 35px;
  padding: 4px;
  text-align: center;
  vertical-align: top;
}

.mod-forum .indent {
  margin-left: 30px;
}

body#user-view .forumpost,
.course .forumpost {
  width: 100%;
}

body#mod-forum-search .c0 {
  text-align: right;
}

body#mod-forum-search .introcontent {
  padding: 15px;
}

.forumolddiscuss {
  text-align: right;
}

.forumheaderlist {
  width: 100%;
}

.forumheaderlist td {
  border-width:1px 0px 0px 1px;
  border-style:solid;
}

.forumheaderlist .replies {
  text-align: center;
  white-space: nowrap;
}

.forumheaderlist .picture {
  width: 35px;
}

.forumheaderlist .discussion .starter {
  vertical-align: middle;
}

.forumheaderlist .lastpost {
  white-space: nowrap;
  text-align: right;
}

.forumheaderlist .discussion .author {
  white-space: nowrap;
}
.forumolddiscuss {
  text-align:right;
}
.forumaddnew,
.forumnodiscuss,
.noticeboxcontent {
  text-align:center;
}
#mod-forum-view .unread {
  padding-left: 3px;
  padding-right: 3px;
}
#mod-forum-discuss .forumpost.unread .content {
  border-style: solid;
  border-width: 2px;
}
#mod-forum-index .unread img,
#mod-forum-view .unread img
{
  margin-left: 5px;
}

#email .unsubscribelink {
  margin-top:20px;
  border-width: 0px 1px 0px 0px;
  border-style: solid;
  text-align:center;
}


/***
 *** Modules: Glossary
 ***/

.glossarypost .commands {
  width: 200px;
  white-space: nowrap;
}

#mod-glossary-comments .glossarypost,
#mod-glossary-comment .glossarypost {
  margin-top: 15px;
}

.entryboxheader {
  border-width: 1px 1px 0px 1px;
  border-style: solid;
}

.entrybox {
  border-width: 0px 1px 1px 1px;
  border-style: solid;
}

.glossarypost {
  width: 95%;
  border-width:1px;
  border-style:solid;
  border-collapse:separate;
  margin-bottom: 5px;
  text-align: left;
}


.entrylist {
  border-width:0px;
}

.entrylowersection {
  padding-top: 10px;
}
.entrylowersection table{
  width: 100%;
}
.entrylowersection .aliases {
  text-align:center;
}
.entrylowersection .icons,
.entrylowersection .ratings {
  text-align:right;
  padding-right: 5px;
}
.entrylowersection .ratings {
  padding-bottom: 2px;
}
.categoryheader {
  width: 95%;
}
.glossaryformatheader {
  width: 90%;
}

.glossarypost .entry {
  padding: 3px;
}

.glossarypost .picture {
  width: 35px;
}

.glossarycomment {
  border-width:1px;
  border-style:solid;
  border-collapse:separate;
  margin-bottom: 5px;
  text-align: left;
}


.glossarycomment .entry {
  padding: 3px;
}

.glossarycomment .picture {
  width: 35px;
}

.glossarycomment .icons {
  text-align: right;
}

.glossarydisplay {
  width: 70%;
}

.glossarydisplay .tabs {
  width: 100%;
}

.glossarydisplay .separator {
  width: 4px;
}

.glossarydisplay .tabs .selected,
.glossarydisplay .tabs .inactive,
.glossarydisplay .tabs .general {
}

.glossarypopup {
  width: 95%;
}

.glossaryapproval {
  width: 100%;
}

.mod-glossary .glossarydisplay .tabs {
  margin-bottom: 0px;
}
.mod-glossary .glossarydisplay .tabs .side {
  border-style: none;
  border-width: 0px;
  width: auto;
}


/***
 *** Modules: Journal
 ***/
#mod-journal-view .lastedit,
#mod-journal-view .editend {
  margin: 5px;
  text-align: center;
}
#mod-journal-view .feedbackbox {
  width: 75%;
  border-collapse: separate;
}
#mod-journal-view .entrycontent {
  padding: 3px;
}
#mod-journal-view .picture {
  width: 35px;
}
#mod-journal-view .grade {
  text-align: right;
}
#mod-journal-view .info {
  margin-bottom: 5px;
  text-align: right;
}


/***
 *** Modules: Label
 ***/

/***
 *** Modules: Lesson
 ***/


/***
 *** Modules: Quiz
 ***/


#mod-quiz-attempt #page {
  text-align: center;
}

body#mod-quiz-report table#attempts,
body#mod-quiz-report table#commands,
body#mod-quiz-report table#itemanalysis
{
  width: 80%;
  margin: auto;
}
body#mod-quiz-report table#attempts {
  margin: 20px auto;
}
body#mod-quiz-report table#attempts .header,
body#mod-quiz-report table#attempts .cell
{
  padding: 4px;
}
body#mod-quiz-report table#attempts .header .commands {
  display: inline;
}
body#mod-quiz-report table#attempts .picture {
  width: 40px;
}
body#mod-quiz-report table#attempts td {
  border-left-width: 1px;
  border-right-width: 1px;
  border-left-style: solid;
  border-right-style: solid;
  vertical-align: middle;
}
body#mod-quiz-report table#attempts .header {
  text-align: left;
}
body#mod-quiz-report table#attempts .picture {
  text-align: center !important;
}
body#mod-quiz-report .controls {
  text-align: center;
}

/* .navbutton form {
  display: inline;
  } */

/***
 *** Modules: Resource
 ***/

.ims-nav-bar {
  position: relative;
  padding:0.1em;
}

.ims-nav-button a,
.ims-nav-dimmed {
  padding-left:1em;
  padding-right:1em;
}

#ims-containerdiv {
  margin-top:0.2em;
}

#ims-menudiv {
  position:absolute;
  width:250px;
  overflow:auto;
}

#ims-menudiv ol {
  list-style-type:none;
  margin:0px;
  padding-left:1em;
}

#ims-contentframe {
  position:absolute;
  left:260px;
  border:1px solid;
  width:640px;
  height:480px;
}

#ims-contentframe-no-nav {
  position:absolute;
  border:1px solid;
  width:640px;
  height:480px;
}

#mod-resource-view div#footer {
  margin-top: 5px;
}

/***
 *** Modules: Scorm
 ***/

/***
 *** Modules: Survey
 ***/

/***
 *** Modules: Wiki
 ***/

/***
 *** Modules: Workshop
 ***/
/***** standard/styles_layout.css end *****/

/***** /mod/assignment/styles.php start *****/

#mod-assignment-submissions .feedback .content,
#mod-assignment-submissions .feedback .topic,
#mod-assignment-submissions .feedback .picture
{
  padding: 10px;
  border-width:1px;
  border-style:solid;
  border-color:#DDDDDD;
}

.mod-assignment .feedback .files {
  float: right;
  background-color: #EFEFEF;
  padding:5px;
}

.mod-assignment .feedback .grade {
  float: right;
}

.mod-assignment .feedback .from {
  float: left;
}

.mod-assignment .feedback .time {
  font-size: 0.8em;
}

.mod-assignment .late {
  color: red;
}

.mod-assignment .files img {
  margin-right: 4px;
}

.mod-assignment .files a {
  white-space:nowrap;
}

#mod-assignment-submissions .generaltable .r1 {
  background-color: #FFFFFF;
}

#mod-assignment-submissions .header .commands {
  display: inline;
}

#mod-assignment-submissions .s0 {
  background: #FFD991;
}

#mod-assignment-submissions table.submissions td,
#mod-assignment-submissions table.submissions th
{
  border-width: 1px;
  border-style: solid;
  border-color: #DDDDDD;
  vertical-align: middle;
  padding-left: 5px;
  padding-right: 5px;
}

#mod-assignment-submissions .submissions .grade {
  text-align: right;
  font-weight:bold;
}

#mod-assignment-submissions .picture {
  width: 35px;
}

#mod-assignment-submissions .fullname {
  text-align: left;
}

#mod-assignment-submissions .timemodified,
#mod-assignment-submissions .timemarked
{
  text-align: left;
  font-size: 0.9em;
}

#mod-assignment-submissions .status {
  text-align: center;
}

#mod-assignment-view #online .singlebutton {
  text-align: center;
}

#mod-assignment-view #dates {
  font-size: 0.8em;
  margin-top: 30px;
  margin-bottom: 30px;
}

#mod-assignment-view #dates .c0{
  text-align:right;
  font-weight:bold;
}

#mod-assignment-view .feedback {
  border-width:1px;
  border-style:solid;
  border-color:#DDDDDD;
  margin-top: 15px;
  width: 80%;
  margin-left: 10%;
  margin-right: 10%;
}

#mod-assignment-view .feedback .topic {
  padding: 4px;
  border-style:solid;
  border-width: 0px;
  border-bottom-width: 1px;
  border-color:#DDDDDD;
}

#mod-assignment-view .feedback .fullname {
  font-weight: bold;
}

#mod-assignment-view .feedback .date {
  font-size: 0.8em;
}

#mod-assignment-view .feedback .content {
  padding: 4px;
}

#mod-assignment-view .feedback .grade {
  text-align: right;
  font-weight:bold;
}

#mod-assignment-view .feedback .left {
  width: 35px;
  padding: 4px;
  text-align: center;
  vertical-align: top;
}
/***** /mod/assignment/styles.php end *****/

/***** /mod/choice/styles.php start *****/

.mod-choice .results {
  border-collapse: separate;
}

.mod-choice .results .data {
  border-width:1px;
  border-style:solid;
  border-color:#999;
}
/***** /mod/choice/styles.php end *****/

/***** /mod/data/styles.php start *****/

#mod-data-view #sortsearch .c0 {
  text-align: right;
}

.mod-data-field .c0 {
  text-align: right;
}

.mod-data-field .fieldname {
  width:300px;
}

.mod-data-field .fielddescription {
  width:300px;
}

.presetcontrols form {
  display: inline;
}
/***** /mod/data/styles.php end *****/

/***** /mod/lesson/styles.php start *****/

/***
 *** General styles (scope: all of lesson)
 ***/
 
.mod-lesson .contents {
    text-align: left;
}

.mod-lesson .addlinks {
    font-size: .8em;
}

.mod-lesson .userinfotable .cell,
.mod-lesson .userinfotable .userpicture {
    vertical-align: middle;
}

/***
 *** Style for view.php
 ***/

#mod-lesson-view .password-form {
    text-align: center;
    margin-top: 20px;
}

#mod-lesson-view .password-form .submitbutton {
    display: inline;
}

/***
 *** Style for essay.php
 ***/

#mod-lesson-essay .graded {
    color:#DF041E;
}

#mod-lesson-essay .sent {
    color:#006600;
}

#mod-lesson-essay .ungraded {
    color:#999999;
}

#mod-lesson-essay .gradetable {
    margin-bottom: 20px;
}

#mod-lesson-essay .buttons {
    text-align: center;
}

/***
 *** Style for responses
 ***/

/* .response style is applied for both .correct and .incorrect */
.mod-lesson .response {
    padding-top: 10px;
}

/* for correct responses (can override .response) */
.mod-lesson .correct {
    /*color: green;*/
}

/* for incorrect responses (can override .response) */
.mod-lesson .incorrect {
    /*color: red;*/
}

/* for highlighting matches in responses for short answer regular expression (can override .incorrect) */
.mod-lesson .matches {
    /*color: red;*/
}

/***
 *** Slide show Style
 ***/

/* NOTE: background color, height and width are set in the lesson settings */
.mod-lesson .slideshow {  
    overflow: auto;
    padding-right: 16px; /* for the benefit of macIE5 only */ 
    /* \ commented backslash hack - recover from macIE5 workarounds, it will ignore the following rule */
    padding-right: 0;
    padding: 15px;
}

/***
 *** Left Menu Styles
 ***/

.mod-lesson .leftmenu_container {
  width:170px;
  height:400px;
  overflow:auto;
  vertical-align:top;
  padding-bottom: 15px;  /* for the sake of MacIE5 only */
}
.mod-lesson .leftmenu_title {
}
.mod-lesson .leftmenu_courselink {
    font-size:.9em;
}
.mod-lesson .leftmenu_links {
    font-size:.85em;
    font-style: normal;
}
.mod-lesson .leftmenu_links ul {
    list-style-type: none;
    margin: 0px;
    padding: 0px;
    padding-top: 5px;
    padding-left: 10px;
}

.mod-lesson .leftmenu_selected_link {
}

.mod-lesson .leftmenu_not_selected_link {
}

.mod-lesson .skip {
    position: absolute;
    left: -1000em;
    width: 20em;
}


/***
 *** Lesson Buttons
 ***/

.mod-lesson .lessonbutton a {
  padding-left:1em;
  padding-right:1em;
}

.mod-lesson .lessonbutton a:link,
.mod-lesson .lessonbutton a:visited, 
.mod-lesson .lessonbutton a:hover {
    color: #000;
    text-decoration: none;
}

.mod-lesson .lessonbutton a:link,
.mod-lesson .lessonbutton a:visited {
  border-top: 1px solid #cecece;
  border-bottom: 2px solid #4a4a4a;
  border-left: 1px solid #cecece;
  border-right: 2px solid #4a4a4a;
}

.mod-lesson .lessonbutton a:hover {
  border-bottom: 1px solid #cecece;
  border-top: 2px solid #4a4a4a;
  border-right: 1px solid #cecece;
  border-left: 2px solid #4a4a4a;
}


/***
 ***  Use these to override lessonbutton class
 ***  Or just comment out all of lessonbutton class definitions and start from scratch below
 ***/

/* for previous branch buttons only */
.mod-lesson .previousbutton {
}

/* for next branch buttons only */
.mod-lesson .nextbutton {
}

/* All other branch buttons */
.mod-lesson .standardbutton {
}

/* Next classes are for branch table buttons when displayed horizontally */
.mod-lesson .prevhorizontal,
.mod-lesson .prevhorizontal .lessonbutton,
.mod-lesson .nexthorizontal,
.mod-lesson .nexthorizontal .lessonbutton,
.mod-lesson .standardhorizontal,
.mod-lesson .standardhorizontal .lessonbutton {
    display: inline;
}

/* Next classes are for branch table buttons when displayed vertically */
.mod-lesson .prevvertical .lessonbutton,
.mod-lesson .nextvertical .lessonbutton,
.mod-lesson .standardvertical .lessonbutton {
    padding: 5px;
}

/*  branchbuttoncontainer wraps around branch table buttons */
.mod-lesson .branchbuttoncontainer {
    text-align: center;
    padding: 13px 3px 3px 3px;
}

.mod-lesson .branchbuttoncontainer form {
    display: inline;
}

/***
 *** Lesson Progress Bar
 ***    Default styles for this are very basic right now.
 ***    User is supposed to configure this to their liking (like using pictures)
 ***/

.mod-lesson .progress_bar {
    padding: 20px;
}

.mod-lesson .progress_bar_table {
    width: 80%;
    padding: 0px;
    margin: 0px;
}

.mod-lesson .progress_bar_completed {
    /*  Example Use of Image
    background-image: url(http://66.165.175.238/moodle/mod/lesson/completed.gif);
    background-position: center;
    background-repeat: repeat-x;
    */
    background-color: green;
    padding: 0px;
    margin: 0px;    
}

.mod-lesson .progress_bar_todo {
    /*  Example Use of Image
    background-image: url(http://66.165.175.238/moodle/mod/lesson/todo.gif);
    background-repeat: repeat-x;
    background-position: center;
    */
    background-color: red;
    text-align: left;
    padding: 0px;
    margin: 0px;
}

.mod-lesson .progress_bar_token {
    /*  Example Use of Image
    background-image: url(http://66.165.175.238/moodle/mod/lesson/token.gif);
    background-repeat: repeat-none;
    */
    background-color: #000000;
    height: 20px;
    width: 5px;
    padding: 0px;
    margin: 0px;
}
/***** /mod/lesson/styles.php end *****/

/***** /mod/quiz/styles.php start *****/

body#mod-quiz-report table#itemanalysis {
  margin: 20px auto;
}
body#mod-quiz-report table#itemanalysis .header,
body#mod-quiz-report table#itemanalysis .cell
{
  padding: 4px;
}
body#mod-quiz-report table#itemanalysis .header .commands {
  display: inline;
}
body#mod-quiz-report table#itemanalysis td {
  border-width: 1px;
  border-style: solid;
}
body#mod-quiz-report table#itemanalysis .header {
  text-align: left;
}
body#mod-quiz-report table#itemanalysis .numcol {
  text-align: center;
  vertical-align : middle !important;
}

body#mod-quiz-report table#itemanalysis .uncorrect {
  color: red;
}

body#mod-quiz-report table#itemanalysis .correct {
  color: blue;
  font-weight : bold;
}

body#mod-quiz-report table#itemanalysis .partialcorrect {
  color: green !important;
}

body#mod-quiz-report table#itemanalysis .qname {
  color: green !important;
}

/* manual grading */
body#mod-quiz-grading table#grading
{
  width: 80%;
  margin: auto;
}

body#mod-quiz-grading table#grading
{
  margin: 20px auto;
}

body#mod-quiz-grading table#grading .header,
body#mod-quiz-grading table#grading .cell
{
  padding: 4px;
}

body#mod-quiz-grading table#grading .header .commands 
{
  display: inline;
}

body#mod-quiz-grading table#grading .picture 
{
  width: 40px;
}

body#mod-quiz-grading table#grading td 
{
  border-left-width: 1px;
  border-right-width: 1px;
  border-left-style: solid;
  border-right-style: solid;
  vertical-align: bottom;
}

.mod-quiz .quiz-report-title {
  text-align: center;
  font-weight : bold;
}

.mod-quiz .gradingdetails {
  font-size: small;
}

#mod-quiz-attempt #page {
    text-align: center;
}

#mod-quiz-attempt #timer .generalbox {
  width:150px
}

#mod-quiz-attempt #timer {
  position:absolute;
  /*top:100px; is set by js*/
  left:10px
}
#question-preview .essay .answer textarea {
  width: 400px;
}
/***** /mod/quiz/styles.php end *****/

/***** /mod/scorm/styles.php start *****/

.structlist  {
  list-style-type: none;
  white-space: nowrap;
  font-size: small;
}
.orgtitle {
  font-weight: bold;
  font-size: small;
}
.mod-scorm .top {
  vertical-align: top;
}
.mod-scorm .left {
  text-align: left;
}
.mod-scorm .center {
  text-align: center;
}
.mod-scorm .right {
  text-align: right;
}
.mod-scorm .scoframe {

}

#mod-scorm-player #scormpage {
  position: relative;
  width: 100%;
}
#mod-scorm-player #tocbox {
  position: absolute;
  left: 0px;
  top: 0px;
  width: 19%;
}
#mod-scorm-player #tochead {
  text-align: center;
  font-weight: bold;
}
#mod-scorm-player #scormbox {
  position: absolute;
  right: 0px;
  top: 0px;
}
#mod-scorm-player .toc {
  width: 80%; 
  margin-left: 20%; 
}
#mod-scorm-player .no-toc {
  width: 100%;
}
#mod-scorm-player #scormobject {
 /* border: 1px solid black; */
}
#mod-scorm-player #scormtop {
  position: relative;
  width: 100%;
  height: 30px;
}
#mod-scorm-player #scormbrowse {
  position: absolute;
  left: 5px;
  top: 0px;
}
#mod-scorm-player #scormnav {
  position: absolute;
  right: 5px;
  top: 0px;
}
#mod-scorm-player .structurelist {
  list-style-type: none;
  text-indent:-4ex;
  font-size: small;
}

#mod-scorm-view .structurehead {
  font-weight: bold;
  text-align: center;
}
#mod-scorm-view .structurelist  {
  list-style-type: none;
  white-space: nowrap;
}
/***** /mod/scorm/styles.php end *****/

/***** /mod/workshop/styles.php start *****/

.workshop_feedbackbox {
    margin-top: 5px;
    border-width: 1px;
    border-style: solid;
    border-color: #999999;
}

.workshop_feedbackbox .picture {
    vertical-align: top;
}

.workshop_feedbackbox .author {
    vertical-align: top;
    display: block;
}

.workshop_feedbackbox .time {
    vertical-align: top;
    display: block;
}

.workshop_feedbackbox .content {
    vertical-align: top;
}

.workshop_feedbackbox .comment {
    display: block;
}

.workshop_feedbackbox .teachercomment {
    display: block;
    font-weight: bold;
}
/***** /mod/workshop/styles.php end *****/

/***** /blocks/admin/styles.php start *****/

.block_adminblock .content {
    text-align: center;
    padding: 10px;
}
/***** /blocks/admin/styles.php end *****/

/***** /blocks/blog_tags/styles.php start *****/

.block_blog_tags .s20 {
  font-size: 1.5em;
  font-weight: bold;
}

.block_blog_tags .s19 {
  font-size: 1.5em;
}

.block_blog_tags .s18 {
  font-size: 1.4em;
  font-weight: bold;
}

.block_blog_tags .s17 {
  font-size: 1.4em;
}

.block_blog_tags .s16 {
  font-size: 1.3em;
  font-weight: bold;
}

.block_blog_tags .s15 {
  font-size: 1.3em;
}

.block_blog_tags .s14 {
  font-size: 1.2em;
  font-weight: bold;
}

.block_blog_tags .s13 {
  font-size: 1.2em;
}

.block_blog_tags .s12,
.block_blog_tags .s11 {
  font-size: 1.1em;
  font-weight: bold;
}

.block_blog_tags .s10,
.block_blog_tags .s9 {
  font-size: 1.1em;
}

.block_blog_tags .s8,
.block_blog_tags .s7 {
  font-size: 1em;
  font-weight: bold;
}

.block_blog_tags .s6,
.block_blog_tags .s5 {
  font-size: 1em;
}

.block_blog_tags .s4,
.block_blog_tags .s3 {
  font-size: 0.9em;
  font-weight: bold;
}

.block_blog_tags .s2,
.block_blog_tags .s1 {
  font-size: 0.9em;
}

/***** /blocks/blog_tags/styles.php end *****/

/***** /blocks/calendar_month/styles.php start *****/

.block_calendar_month .cal_popup_caption,
.block_calendar_month .cal_popup_fg div {
    font-size: 0.85em !important;
}

.block_calendar_month .filters {
    font-size:0.75em;
    padding: 5px;
}

.block_calendar_month .filters table {
    border-collapse:separate;
    border-spacing: 2px;
    padding: 2px;
}

.block_calendar_month .event_global,
.block_calendar_month .event_course,
.block_calendar_month .event_group,
.block_calendar_month .event_user {
    border-width: 2px;
    border-style: solid;
}
/***** /blocks/calendar_month/styles.php end *****/

/***** /blocks/calendar_upcoming/styles.php start *****/

.block_calendar_upcoming .event .date {
    text-align:right;
}
/***** /blocks/calendar_upcoming/styles.php end *****/

/***** /blocks/course_summary/styles.php start *****/

.block_course_summary .content {
    padding:10px;
}
/***** /blocks/course_summary/styles.php end *****/

/***** /blocks/login/styles.php start *****/

.block_login .logintable {
  text-align:center;
}

.block_login .loginform {
  display:inline;
}
/***** /blocks/login/styles.php end *****/

/***** /blocks/quiz_results/styles.php start *****/

.block_quiz_results {
    text-align: center;
}

.block_quiz_results table.grades .number, 
.block_quiz_results table.grades .grade {
    text-align: right;
    width: 10%;
}

.block_quiz_results table.grades {
    text-align: left;
    width: 100%;
}

.block_quiz_results table.grades caption {
    margin: 1em 0px 0px 0px;
    border-bottom: 1px solid;
    font-weight: bold;
}

.block_quiz_results h1 {
    margin: 4px;
    font-weight: bold;
    font-size: 1.1em;
}
/***** /blocks/quiz_results/styles.php end *****/

/***** /blocks/rss_client/styles.php start *****/

.block_rss_client .link {
  border-top:1px solid;
  border-top-color:#DDDDDD;
  padding-bottom:5px;
  font-size:0.82em;
}

.block_rss_client .description {
  color:#555555;
  font-size:0.78em;
  padding-left:10px;
  padding-bottom:8px;
}

.block_rss_client .title {
  font-size:1.0em;
}

.block_rss_client .image {
}

.blockconfigtable #rssfeeds {
    width: 100%;
}

.blockconfigtable #rssfeeds td.actions {
    text-align: center;
    vertical-align: middle;
    padding: 10px;
}

.blockconfigtable #rssfeeds td.feed {
    vertical-align: middle;
    padding: 5px;
}

.blockconfigtable #rssfeeds .title {
    font-weight: bold;
    margin-bottom: 2px;
}

.blockconfigtable #rssfeeds .url, .blockconfigtable #rssfeeds .description {
    font-size: 0.8em;
}

.blockconfigtable #rssfeeds tr.r0 {
  background-color: #ffffff;
}

.blockconfigtable #rssfeeds tr.r1 {
  background-color: #f0f0f0;
}
/***** /blocks/rss_client/styles.php end *****/

/***** /blocks/search_forums/styles.php start *****/

.block_search_forums .searchform {
    text-align: center;
}

.block_search_forums .searchform img {
    vertical-align: middle;
}

/***** /blocks/search_forums/styles.php end *****/

