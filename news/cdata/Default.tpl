<?php
///////////////////// TEMPLATE Default /////////////////////
$template_active = <<<HTML
<div style="width:960px; margin-bottom:30px;">
<div><h3>{title}</h3> {star-rate}</div>

<div style="font-size: 14px;text-align:justify; padding:3px; margin-top:3px; margin-bottom:5px; border-top:1px solid #D3D3D3;">{short-story}</div>


<div><em>Posted on {date} by {author}</em></div>
</div>
HTML;


$template_full = <<<HTML
<div style="width:960px; margin-bottom:15px;">
<div><h3>{title}</h3> {star-rate}</div>

{avatar}

<div style="font-size: 14px;text-align:justify; padding:3px; margin-top:3px; margin-bottom:5px; border-top:1px solid #D3D3D3;">{full-story}</div>


<div>[edit]Edit | [/edit]<em>Posted on {date} by {author}</em></div>
</div>
HTML;


$template_comment = <<<HTML
<div style="width: 960px; margin-bottom:20px;">

<div style="border-bottom:1px solid black;"> by <strong>{author}</strong> @ {date}</div>

<div style="padding:2px; background-color:#F9F9F9">{comment}</div>

</div>
HTML;


$template_form = <<<HTML
  <table border="0" width="370" cellspacing="0" cellpadding="0">
    <tr>
      <td width="60">Name:</td>
      <td><input type="text" name="name" value="{username}"></td>
    </tr>
    <tr>
      <td>E-mail:</td>
      <td><input type="text" name="mail"  value="{usermail}"> (optional)</td>
    </tr>
    <tr>
      <td>Smile:</td>
      <td>{smilies}</td>
    </tr>
    <tr>
      <td colspan="2">
      <textarea cols="40" rows="6" id=commentsbox name="comments"></textarea><br />
      <input type="submit" name="submit" value="Add My Comment">
      {remember_me}
      </td>
    </tr>
  </table>
HTML;


$template_prev_next = <<<HTML
<p align="center">[prev-link]<< Previous[/prev-link] {pages} [next-link]Next >>[/next-link]</p>
HTML;


$template_comments_prev_next = <<<HTML
<p align="center">[prev-link]<< Older[/prev-link] ({pages}) [next-link]Newest >>[/next-link]</p>
HTML;


?>