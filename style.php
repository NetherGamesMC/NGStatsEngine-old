<?php
include "config.php";
$theme = $site["theme"];
echo "
select.minimal {
  background-image: linear-gradient(45deg, transparent 50%, gray 50%), linear-gradient(135deg, gray 50%, transparent 50%), linear-gradient(to right, #ccc, #ccc);
  background-position: calc(100% - 20px) calc(1em + 2px), calc(100% - 15px) calc(1em + 2px), calc(100% - 2.5em) 0.5em;
  background-size: 5px 5px, 5px 5px, 1px 1.5em;
  background-repeat: no-repeat;
}

select.minimal:focus {
  background-image: linear-gradient(45deg, $theme 50%, transparent 50%), linear-gradient(135deg, transparent 50%, $theme 50%), linear-gradient(to right, #ccc, #ccc);
  background-position: calc(100% - 15px) 1em, calc(100% - 20px) 1em, calc(100% - 2.5em) 0.5em;
  background-size: 5px 5px, 5px 5px, 1px 1.5em;
  background-repeat: no-repeat;
  outline: 0;
}

@font-face {
  font-family: 'RobotoDraft';
  font-style: normal;
  font-weight: 400;
  src: local('RobotoDraft'), local('RobotoDraft-Regular'), url(https://fonts.gstatic.com/s/robotodraft/v1/0xES5Sl_v6oyT7dAKuoni4gp9Q8gbYrhqGlRav_IXfk.woff2) format('woff2'), url(https://fonts.gstatic.com/s/robotodraft/v1/0xES5Sl_v6oyT7dAKuoni7rIa-7acMAeDBVuclsi6Gc.woff) format('woff');
}

@font-face {
  font-family: 'RobotoDraft';
  font-style: normal;
  font-weight: 500;
  src: local('RobotoDraft Medium'), local('RobotoDraft-Medium'), url(https://fonts.gstatic.com/s/robotodraft/v1/u0_CMoUf3y3-4Ss4ci-VwXJuJo8UJJfpGKt7pXjBv4s.woff2) format('woff2'), url(https://fonts.gstatic.com/s/robotodraft/v1/u0_CMoUf3y3-4Ss4ci-VwaTA90I55Xt7owhZwpPnMsc.woff) format('woff');
}

@font-face {
  font-family: 'RobotoDraft';
  font-style: normal;
  font-weight: 700;
  src: local('RobotoDraft Bold'), local('RobotoDraft-Bold'), url(https://fonts.gstatic.com/s/robotodraft/v1/u0_CMoUf3y3-4Ss4ci-Vwf79_ZuUxCigM2DespTnFaw.woff2) format('woff2'), url(https://fonts.gstatic.com/s/robotodraft/v1/u0_CMoUf3y3-4Ss4ci-VwRbnBKKEOwRKgsHDreGcocg.woff) format('woff');
}

@font-face {
  font-family: 'RobotoDraft';
  font-style: italic;
  font-weight: 400;
  src: local('RobotoDraft Italic'), local('RobotoDraft-Italic'), url(https://fonts.gstatic.com/s/robotodraft/v1/er-TIW55l9KWsTS1x9bTfgeOulFbQKHxPa89BaxZzA0.woff2) format('woff2'), url(https://fonts.gstatic.com/s/robotodraft/v1/er-TIW55l9KWsTS1x9bTfoo3ZslTYfJv0R05CazkwN8.woff) format('woff');
}

.paper {
  background-color: #fff;
  padding: 19px;
  margin-bottom: 20px;
  webkit-box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  border-radius: 0;
  border: 0;
}

input {
  font-size: 18px;
  padding: 10px 10px 10px 5px;
  display: block;
  width: 200px;
  border: none;
  border-bottom: 1px solid #757575;
  background: transparent;
  -webkit-appearance: none;
  border-radius: 0;
}

.pure-form select {
  border-bottom: 1px solid #757575 !important;
}

.pure-form select:focus {
  border-bottom: 2px solid $theme !important;
}

input:active,
input:focus {
  border-bottom: 2px solid $theme;
}

input:focus,
.pure-form select:focus {
  outline: none;
}

a {
  color: $theme;
}

.alert {
  background: rgba(255,0,0,0.6);
  color: #fff;
  padding: 10px;
}

img,
legend {
  border: 0
}

legend,
td,
th {
  padding: 0
}

.pure-button:focus,
a:active,
a:hover {
  outline: 0
}

.pure-table,
table {
  border-collapse: collapse;
  border-spacing: 0
}

html {
  font-family: 'RobotoDraft', sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%
}

body {
  margin: 0;
  background: #eee;
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
menu,
nav,
section,
summary {
  display: block
}

audio,
canvas,
progress,
video {
  display: inline-block;
  vertical-align: baseline
}

.hidden,
[hidden],
template {
  display: none
}

audio:not([controls]) {
  display: none;
  height: 0
}

a {
  background-color: transparent
}

abbr[title] {
  border-bottom: 1px dotted
}

b,
optgroup,
strong {
  font-weight: 700
}

dfn {
  font-style: italic
}

h1 {
  font-size: 2em;
  margin: .67em 0
}

mark {
  background: #ff0;
  color: #000
}

small {
  font-size: 80%
}

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline
}

sup {
  top: -.5em
}

sub {
  bottom: -.25em
}

svg:not(:root) {
  overflow: hidden
}

figure {
  margin: 1em 40px
}

hr {
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  height: 0
}

pre,
textarea {
  overflow: auto
}

code,
kbd,
pre,
samp {
  font-family: monospace, monospace;
  font-size: 1em
}

button,
input,
optgroup,
select,
textarea {
  color: inherit;
  font: inherit;
  margin: 0
}

.pure-button,
input {
  line-height: normal
}

button {
  overflow: visible
}

button,
select {
  text-transform: none
}

button,
html input[type=button],
input[type=reset],
input[type=submit] {
  -webkit-appearance: button;
  cursor: pointer
}

button[disabled],
html input[disabled] {
  cursor: default
}

button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0
}

input[type=checkbox],
input[type=radio] {
  box-sizing: border-box;
  padding: 0
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
  height: auto
}

input[type=search] {
  -webkit-appearance: textfield;
  -moz-box-sizing: content-box;
  -webkit-box-sizing: content-box;
  box-sizing: content-box
}

input[type=search]::-webkit-search-cancel-button,
input[type=search]::-webkit-search-decoration {
  -webkit-appearance: none
}

fieldset {
  border: 1px solid silver;
  margin: 0 2px;
  padding: .35em .625em .75em
}

.pure-img {
  max-width: 100%;
  height: auto;
  display: block
}

.pure-g {
  letter-spacing: -.31em;
  text-rendering: optimizespeed;
  font-family: FreeSans, Arimo, 'Droid Sans', Helvetica, Arial, sans-serif;
  -webkit-flex-flow: row wrap;
  display: -ms-flexbox;
  -ms-flex-flow: row wrap;
  -ms-align-content: flex-start;
  -webkit-align-content: flex-start;
  align-content: flex-start
}

.opera-only:-o-prefocus,
.pure-g {
  word-spacing: -.43em
}

.pure-u,
.pure-u-1,
.pure-u-1-1,
.pure-u-1-12,
.pure-u-1-2,
.pure-u-1-24,
.pure-u-1-3,
.pure-u-1-4,
.pure-u-1-5,
.pure-u-1-6,
.pure-u-1-8,
.pure-u-10-24,
.pure-u-11-12,
.pure-u-11-24,
.pure-u-12-24,
.pure-u-13-24,
.pure-u-14-24,
.pure-u-15-24,
.pure-u-16-24,
.pure-u-17-24,
.pure-u-18-24,
.pure-u-19-24,
.pure-u-2-24,
.pure-u-2-3,
.pure-u-2-5,
.pure-u-20-24,
.pure-u-21-24,
.pure-u-22-24,
.pure-u-23-24,
.pure-u-24-24,
.pure-u-3-24,
.pure-u-3-4,
.pure-u-3-5,
.pure-u-3-8,
.pure-u-4-24,
.pure-u-4-5,
.pure-u-5-12,
.pure-u-5-24,
.pure-u-5-5,
.pure-u-5-6,
.pure-u-5-8,
.pure-u-6-24,
.pure-u-7-12,
.pure-u-7-24,
.pure-u-7-8,
.pure-u-8-24,
.pure-u-9-24 {
  letter-spacing: normal;
  word-spacing: normal;
  vertical-align: top;
  text-rendering: auto;
  display: inline-block;
  zoom: 1
}

.pure-g [class*=pure-u] {
  font-family: sans-serif
}

.pure-u-1-24 {
  width: 4.1667%
}

.pure-u-1-12,
.pure-u-2-24 {
  width: 8.3333%
}

.pure-u-1-8,
.pure-u-3-24 {
  width: 12.5%
}

.pure-u-1-6,
.pure-u-4-24 {
  width: 16.6667%
}

.pure-u-1-5 {
  width: 20%
}

.pure-u-5-24 {
  width: 20.8333%
}

.pure-u-1-4,
.pure-u-6-24 {
  width: 25%
}

.pure-u-7-24 {
  width: 29.1667%
}

.pure-u-1-3,
.pure-u-8-24 {
  width: 33.3333%
}

.pure-u-3-8,
.pure-u-9-24 {
  width: 37.5%
}

.pure-u-2-5 {
  width: 40%
}

.pure-u-10-24,
.pure-u-5-12 {
  width: 41.6667%
}

.pure-u-11-24 {
  width: 45.8333%
}

.pure-u-1-2,
.pure-u-12-24 {
  width: 50%
}

.pure-u-13-24 {
  width: 54.1667%
}

.pure-u-14-24,
.pure-u-7-12 {
  width: 58.3333%
}

.pure-u-3-5 {
  width: 60%
}

.pure-u-15-24,
.pure-u-5-8 {
  width: 62.5%
}

.pure-u-16-24,
.pure-u-2-3 {
  width: 66.6667%
}

.pure-u-17-24 {
  width: 70.8333%
}

.pure-u-18-24,
.pure-u-3-4 {
  width: 75%
}

.pure-u-19-24 {
  width: 79.1667%
}

.pure-u-4-5 {
  width: 80%
}

.pure-u-20-24,
.pure-u-5-6 {
  width: 83.3333%
}

.pure-u-21-24,
.pure-u-7-8 {
  width: 87.5%
}

.pure-u-11-12,
.pure-u-22-24 {
  width: 91.6667%
}

.pure-u-23-24 {
  width: 95.8333%
}

.pure-u-1,
.pure-u-1-1,
.pure-u-24-24,
.pure-u-5-5 {
  width: 100%
}

.pure-button {
  display: inline-block;
  zoom: 1;
  white-space: nowrap;
  vertical-align: middle;
  text-align: center;
  cursor: pointer;
  -webkit-user-drag: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  font-family: inherit;
  font-size: 100%;
  padding: .5em 1em;
  color: #444;
  color: rgba(0, 0, 0, .8);
  border: 1px solid #999;
  border: 0 transparent;
  background-color: #E6E6E6;
  text-decoration: none;
  border-radius: 0px;
  width: 215px;
}

.pure-button-hover,
.pure-button:focus,
.pure-button:hover {
  filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#1a000000', GradientType=0);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(transparent), color-stop(40%, rgba(0, 0, 0, .05)), to(rgba(0, 0, 0, .1)));
  background-image: -webkit-linear-gradient(transparent, rgba(0, 0, 0, .05) 40%, rgba(0, 0, 0, .1));
  background-image: -moz-linear-gradient(top, rgba(0, 0, 0, .05) 0, rgba(0, 0, 0, .1));
  background-image: -o-linear-gradient(transparent, rgba(0, 0, 0, .05) 40%, rgba(0, 0, 0, .1));
  background-image: linear-gradient(transparent, rgba(0, 0, 0, .05) 40%, rgba(0, 0, 0, .1))
}

.pure-button-active,
.pure-button:active {
  box-shadow: 0 0 0 1px rgba(0, 0, 0, .15) inset, 0 0 6px rgba(0, 0, 0, .2) inset;
  border-color: #000\9
}

.pure-button-disabled,
.pure-button-disabled:active,
.pure-button-disabled:focus,
.pure-button-disabled:hover,
.pure-button[disabled] {
  border: 0;
  background-image: none;
  filter: progid: DXImageTransform.Microsoft.gradient(enabled=false);
  filter: alpha(opacity=40);
  -khtml-opacity: .4;
  -moz-opacity: .4;
  opacity: .4;
  cursor: not-allowed;
  box-shadow: none
}

.pure-button-hidden {
  display: none
}

.pure-button::-moz-focus-inner {
  padding: 0;
  border: 0
}

.pure-button-primary,
.pure-button-selected,
a.pure-button-primary,
a.pure-button-selected {
  background-color: $theme;
  color: #fff
}

.pure-form input:not([type]) {
  padding: .5em .6em;
  display: inline-block;
  border: 1px solid #ccc;
  box-shadow: inset 0 1px 3px #ddd;
  border-radius: 0px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box
}

.pure-form .pure-checkbox,
.pure-form .pure-radio {
  margin: .5em 0;
  display: block
}

.pure-form select {
  border: none;
  height: 2.25em;
  background-color: #fff;
  -webkit-appearance: none;
  border-radius: 0;
  padding: 0.5em 3.5em 0.5em 0.4em;
}

.pure-form select[multiple] {
  height: auto
}

.pure-form label {
  margin: .5em 0 .2em
}

.pure-form fieldset {
  margin: 0;
  padding: .35em 0 .75em;
  border: 0
}

.pure-form legend {
  display: block;
  width: 100%;
  padding: .3em 0;
  margin-bottom: .3em;
  color: #333;
  border-bottom: 1px solid #e5e5e5
}

.pure-form-aligned textarea {
  vertical-align: top
}

.pure-form-aligned .pure-control-group {
  margin-bottom: .5em
}

.pure-form-aligned .pure-control-group label {
  text-align: right;
  display: inline-block;
  vertical-align: middle;
  width: 10em;
  margin: 0 1em 0 0
}

.pure-form-aligned .pure-controls {
  margin: 1.5em 0 0 11em
}

.pure-form .pure-input-rounded,
.pure-form input.pure-input-rounded {
  border-radius: 0em;
  padding: .5em 1em
}

.pure-form .pure-group fieldset {
  margin-bottom: 10px
}

.pure-form .pure-group input,
.pure-form .pure-group textarea {
  display: block;
  padding: 10px;
  margin: 0 0 -1px;
  border-radius: 0;
  position: relative;
  top: -1px
}

.pure-form .pure-group input:focus,
.pure-form .pure-group textarea:focus {
  z-index: 3
}

.pure-form .pure-group input:first-child,
.pure-form .pure-group textarea:first-child {
  top: 1px;
  border-radius: 0px 0px 0 0;
  margin: 0
}

.pure-form .pure-group input:first-child:last-child,
.pure-form .pure-group textarea:first-child:last-child {
  top: 1px;
  border-radius: 0px;
  margin: 0
}

.pure-form .pure-group input:last-child,
.pure-form .pure-group textarea:last-child {
  top: -2px;
  border-radius: 0 0 0px 0px;
  margin: 0
}

.pure-form .pure-group button {
  margin: .35em 0
}

.pure-form .pure-input-1 {
  width: 100%
}

.pure-form .pure-input-2-3 {
  width: 66%
}

.pure-form .pure-input-1-2 {
  width: 50%
}

.pure-form .pure-input-1-3 {
  width: 33%
}

.pure-form .pure-input-1-4 {
  width: 25%
}

.pure-form .pure-help-inline,
.pure-form-message-inline {
  display: inline-block;
  padding-left: .3em;
  color: #666;
  vertical-align: middle;
  font-size: .875em
}

.pure-form-message {
  display: block;
  color: #666;
  font-size: .875em
}

@media only screen and (max-width:480px) {
  .pure-form button[type=submit] {
    margin: .7em 0 0
  }
  .pure-form input:not([type]),
  .pure-form input[type=color],
  .pure-form input[type=date],
  .pure-form input[type=datetime-local],
  .pure-form input[type=datetime],
  .pure-form input[type=email],
  .pure-form input[type=month],
  .pure-form input[type=number],
  .pure-form input[type=password],
  .pure-form input[type=search],
  .pure-form input[type=tel],
  .pure-form input[type=text],
  .pure-form input[type=time],
  .pure-form input[type=url],
  .pure-form input[type=week],
  .pure-form label {
    margin-bottom: .3em;
    display: block
  }
  .pure-group input:not([type]),
  .pure-group input[type=color],
  .pure-group input[type=date],
  .pure-group input[type=datetime-local],
  .pure-group input[type=datetime],
  .pure-group input[type=email],
  .pure-group input[type=month],
  .pure-group input[type=number],
  .pure-group input[type=password],
  .pure-group input[type=search],
  .pure-group input[type=tel],
  .pure-group input[type=text],
  .pure-group input[type=time],
  .pure-group input[type=url],
  .pure-group input[type=week] {
    margin-bottom: 0
  }
  .pure-form-aligned .pure-control-group label {
    margin-bottom: .3em;
    text-align: left;
    display: block;
    width: 100%
  }
  .pure-form-aligned .pure-controls {
    margin: 1.5em 0 0
  }
  .pure-form .pure-help-inline,
  .pure-form-message,
  .pure-form-message-inline {
    display: block;
    font-size: .75em;
    padding: .2em 0 .8em
  }
}

.pure-menu {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  background: $theme;
}

.pure-menu-fixed {
  position: fixed;
  left: 0;
  top: 0;
  z-index: 3
}

.pure-menu-item,
.pure-menu-list {
  position: relative
}

.pure-menu-list {
  list-style: none;
  margin: 0;
  padding: 0
}

.pure-menu-item {
  padding: 0;
  margin: 0;
  height: 100%
}

.pure-menu-heading,
.pure-menu-link {
  display: block;
  text-decoration: none;
  white-space: nowrap
}

.pure-menu-horizontal {
  width: 100%;
  white-space: nowrap
}

.pure-menu-horizontal .pure-menu-list {
  display: inline-block
}

.pure-menu-horizontal .pure-menu-heading,
.pure-menu-horizontal .pure-menu-item,
.pure-menu-horizontal .pure-menu-separator {
  display: inline-block;
  zoom: 1;
  vertical-align: middle
}

.pure-menu-item .pure-menu-item {
  display: block
}

.pure-menu-children {
  display: none;
  position: absolute;
  left: 100%;
  top: 0;
  margin: 0;
  padding: 0;
  z-index: 3
}

.pure-menu-horizontal .pure-menu-children {
  left: 0;
  top: auto;
  width: inherit
}

.pure-menu-active>.pure-menu-children,
.pure-menu-allow-hover:hover>.pure-menu-children {
  display: block;
  position: absolute
}

.pure-menu-has-children>.pure-menu-link:after {
  padding-left: .5em;
  content: '\25B8';
  font-size: small
}

.pure-menu-horizontal .pure-menu-has-children>.pure-menu-link:after {
  content: '\25BE'
}

.pure-menu-scrollable {
  overflow-y: scroll;
  overflow-x: hidden
}

.pure-menu-scrollable .pure-menu-list {
  display: block
}

.pure-menu-horizontal.pure-menu-scrollable .pure-menu-list {
  display: inline-block
}

.pure-menu-horizontal.pure-menu-scrollable {
  white-space: nowrap;
  overflow-y: hidden;
  overflow-x: auto;
  -ms-overflow-style: none;
  -webkit-overflow-scrolling: touch;
  padding: .5em 0;
  position: fixed;
  margin-top: -100px;
}

.pure-menu-horizontal.pure-menu-scrollable::-webkit-scrollbar {
  display: none
}

.pure-menu-separator {
  background-color: #ccc;
  height: 1px;
  margin: .3em 0
}

.pure-menu-horizontal .pure-menu-separator {
  width: 1px;
  height: 1.3em;
  margin: 0 .3em
}

.pure-menu-heading {
  color: #fff
}

.pure-menu-link {
  color: #fff
}

.pure-menu-children {
  background-color: #fff
}

.pure-menu-disabled,
.pure-menu-heading,
.pure-menu-link {
  padding: .5em 1em
}

.pure-menu-disabled {
  opacity: .5
}

.pure-menu-disabled .pure-menu-link:hover {
  background-color: transparent
}

.pure-menu-active>.pure-menu-link,
.pure-menu-link:focus,
.pure-menu-link:hover {
  background-color: rgba(0, 0, 0, 0.2);
}

.pure-menu-selected .pure-menu-link,
.pure-menu-selected .pure-menu-link:visited {
  color: #000
}

.pure-table {
  empty-cells: show;
  border-radius: 0;
  border: 0;
webkit-box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}

.pure-table caption {
  color: #000;
  font: italic 85%/1 arial, sans-serif;
  padding: 1em 0;
  text-align: center
}

.pure-table td,
.pure-table th {
  border-left: 1px solid #cbcbcb;
  border-width: 0 0 0 1px;
  font-size: inherit;
  margin: 0;
  overflow: visible;
  padding: .5em 1em
}

.pure-table td:first-child,
.pure-table th:first-child {
  border-left-width: 0
}

.pure-table thead {
  background-color: #e0e0e0;
  color: #000;
  text-align: left;
  vertical-align: bottom
}

.pure-table td {
  background-color: transparent
}

.pure-table-odd td,
.pure-table-striped tr:nth-child(2n-1) td {
  background-color: #f2f2f2
}

.pure-table-bordered td {
  border-bottom: 1px solid #cbcbcb
}

.pure-table-bordered tbody>tr:last-child>td {
  border-bottom-width: 0
}

tbody {
  background-color: #ffffff;
}

.pure-table-horizontal td,
.pure-table-horizontal th {
  border-width: 0 0 1px;
  border-bottom: 1px solid #cbcbcb
}

.pure-table-horizontal tbody>tr:last-child>td {
  border-bottom-width: 0
}

body {
  color: #777
}

.pure-img-responsive {
  max-width: 100%;
  height: auto
}

#layout,
#menu,
.menu-link {
  -webkit-transition: all .2s ease-out;
  -moz-transition: all .2s ease-out;
  -ms-transition: all .2s ease-out;
  -o-transition: all .2s ease-out;
  transition: all .2s ease-out
}

#layout {
  position: relative;
  padding-left: 0
}

#layout.active #menu {
  left: 150px;
  width: 150px
}

#layout.active .menu-link {
  left: 150px
}

#menu,
.menu-link {
  position: fixed;
  top: 0;
  left: 0
}

.content {
  margin-top: 100px !important;
  margin: 0 auto 50px;
  padding: 0 0em;
  max-width: 100%;
  line-height: 1.6em
}

.header {
  margin: 0;
  color: #333;
  text-align: center;
  padding: 2.5em 2em 0;
}

.header h1 {
  color: $theme;
  margin: .2em 0;
  font-size: 3em;
  font-weight: 400
}

.header h2 {
  font-weight: 400;
  color: #ccc;
  padding: 0;
  margin-top: 0
}

.content-subhead {
  font-weight: 400;
  color: #888
}

#menu {
  margin-left: -150px;
  width: 150px;
  bottom: 0;
  z-index: 1000;
  background: #191818;
  overflow-y: auto;
  -webkit-overflow-scrolling: touch
}

#menu a {
  color: #999;
  border: none;
  padding: .6em 0 .6em .6em
}

#menu .pure-menu,
#menu .pure-menu ul {
  border: none;
  background: 0 0
}

#menu .pure-menu .menu-item-divided,
#menu .pure-menu ul {
  border-top: 1px solid #333
}

#menu .pure-menu li a:focus,
#menu .pure-menu li a:hover {
  background: #333
}

#menu .pure-menu-heading,
#menu .pure-menu-selected {
  background: #1f8dd6
}

#menu .pure-menu-selected a {
  color: #fff
}

#menu .pure-menu-heading {
  font-size: 110%;
  color: #fff;
  margin: 0
}

.menu-link {
  display: block;
  background: #000;
  background: rgba(0, 0, 0, .7);
  font-size: 10px;
  z-index: 10;
  width: 2em;
  height: auto;
  padding: 2.1em 1.6em
}

.menu-link:focus,
.menu-link:hover {
  background: #000
}

.menu-link span {
  position: relative;
  display: block
}

.menu-link span,
.menu-link span:after,
.menu-link span:before {
  background-color: #fff;
  width: 100%;
  height: .2em
}

.menu-link span:after,
.menu-link span:before {
  position: absolute;
  margin-top: -.6em;
  content: ' '
}

.menu-link span:after {
  margin-top: .6em
}

@media (min-width:48em) {
  .content,
  .header {
    padding-left: 0em;
    padding-right: 0em
  }
  #layout {
    padding-left: 150px;
    left: 0
  }
  #layout.active .menu-link,
  #menu,
  .menu-link {
    left: 150px
  }
  .menu-link {
    position: fixed;
    display: none
  }
}

@media (max-width:48em) {
  #layout.active {
    position: relative;
    left: 150px
  }
}
";
?>