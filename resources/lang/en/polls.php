<?php

return [

/*------------------------------------------------------------
*                  ADMIN - POLL
*------------------------------------------------------------*/
    'title' => 'Poll',
    'head' => [
        'create' => 'CREATE A POLL',
        'index' => 'LIST ALL POLLS',
        'edit' => 'EDIT A POLL',
    ],
    'label' => [
        'step_1' => 'Information',
        'full_name' => 'Full-name',
        'email' => 'E-Mail Address',
        'chatwork' => 'Chatwork ID',
        'title' => 'Title',
        'description' => 'Description',
        'location' => 'Location',
        'time_close' => 'Time for close voting',
        'created_at' => 'Created at',
        'type' => 'Type',
        'status' => 'Status',
        'single_choice' => 'Single choice',
        'multiple_choice' => 'Multiple choice',
        'opening' => 'Opening',
        'closed' => 'Closed',
        'poll_opening' => '<span class="label label-success">opening</span>',
        'poll_closed' => '<span class="label label-danger">closed</span>',
        'step_2' => 'Option',
        'option' => 'Option',
        'option_image' => 'Image',
        'step_3' => 'Setting',
        'setting' => [
            'required' => 'Required to vote',
            'required_email' => 'Enter email',
            'required_name' => 'Enter name',
            'required_name_and_email' => 'Enter name and email',
            'hide_result' => 'Hide voting result',
            'custom_link' => 'Optimize poll link',
            'set_limit' => 'Set voting limit',
            'set_password' => 'Set password',
            'show_password' => 'Show password',
            'password_poll' => 'Password of poll: ',
            'is_set_ip' => 'A computer only vote one time',
            'allow_new_option' => 'Allow voters to add new answers',
            'not_same_email' => 'Not the same email when vote',
            'allow_edit_vote_of_poll' => 'Allow edit vote of poll',
            'add_type_mail' => 'Add type of email when voted',
        ],
        'step_4' => 'Participant',
        'invite' => 'If you want send mail to participants, let enter email into below textbox!',
        'search' => 'Search poll information...',
        'search_all' => 'All',
        'no_data' => 'No data',
        'input_date' => 'Only type date',
    ],
    'label_for' => [
        'full_name' => 'name',
        'email' => 'email',
        'chatwork' => 'chatwork',
        'title' => 'title',
        'description' => 'description',
        'location' => 'location',
        'time_close' => 'time_close',
        'type' => 'type',
        'status' => 'status',
        'opening' => 'opening',
        'closed' => 'closed',
        'option' => 'option',
        'option_image' => 'image',
        'setting' => [
            'required_email' => 'enter_email',
            'add_answer' => 'add_answer',
            'hide_result' => 'hide_result',
            'custom_link' => 'custom_link',
            'set_limit' => 'enter_limit',
            'set_password' => 'enter_password',
            'show_password' => 'show_password',
            'on' => 'turn_on',
            'off' => 'turn_off',
        ],
        'single_choice' => 'single',
        'multiple_choice' => 'multiple',
        'invite' => 'invite',
        'add_picture_option' => 'Add Picture For Option',
    ],
    'placeholder' => [
        'full_name' => 'Enter your name... ',
        'email' => 'Enter your email address... ',
        'chatwork' => 'Enter your chatwork id... ',
        'title' => 'Enter poll title... ',
        'description' => 'Enter description ... ',
        'time_close' => 'Set time to close vote',
        'location' => 'Enter a location... ',
        'number_add' => 'Enter a number to add option',
        'number_limit' => 'Number limit',
        'password_poll' => 'Enter password of poll...',
        'option' => 'Enter option of poll...',
        'email_participant' => 'Enter email of participant...',
        'comment' => 'Enter a comment...',
        'enter_name' => 'Enter your name...',
        'token_link' => 'Please enter a token...',
        'type_email' => 'Please enter type email...',
    ],
    'button' => [
        'search_poll' => 'SEARCH NOW',
        'reset_search' => 'Reset result',
        'create_poll' => 'CREATE POLL',
        'change_poll_infor' => 'CHANGE INFORMATION',
        'change_poll_option' => 'CHANGE OPTION',
        'change_poll_setting' => 'CHANGE SETTING',
        'back' => 'BACK LIST POLLS',
        'save_info' => 'Save information',
        'save_option' => 'Save option',
        'save_setting' => 'Save setting',
        'remove' => 'Remove',
        'continue' => 'Continue',
        'previous' => 'Previous',
        'finish' => 'Finish',
        'administration' => 'ADMINISTRATION',
        'edit_back' => 'Back',
        'okay' => 'Okay',
        'cancel' => 'Cancel',
        'upload' => 'Upload',
        'delete' => 'Delete',
        'add' => 'Add',
    ],
    'message' => [
        'create_success' => 'Create poll SUCCESS',
        'create_fail' => 'Create poll FAIL',
        'upload_image_fail' => 'Can\'t upload image of option',
        'send_mail_fail' => 'Can\'t send mail to invite other people.',
        'confirm_delete' => 'Are you sure you want to delete this poll?',
        'confirm_delete_option' => 'Are you sure you want to delete this option. It\'s will remove all voting of this?',
        'link_exists' => 'Link exist in system. Please enter a new link',
        'link_valid' => 'Link valid. You can use this link',
        'submit_form' => 'Good job!\', \'Saving...!\', \'success',
        'not_found_polls' => 'Can\'t found poll lists in system',
        'update_poll_info_success' => 'Update information of poll SUCCESS',
        'update_poll_info_fail' => 'Update information of poll FAIL',
        'update_option_success' => 'Update option SUCCESS',
        'update_option_fail' => 'Update option FAIL',
        'update_setting_success' => 'Update setting of poll SUCCESS',
        'update_setting_fail' => 'Update setting of poll FAIL',
        'delete_poll_fail' => 'Delete poll FAIL',
        'delete_poll_success' => 'Delete poll SUCCESS',
        'email_exists' => 'Email exist in system. Please enter a new email or login into system',
        'email_valid' => 'Email valid. You can use this email',
        'no_setting' => 'Haven\'t any setting with this poll.',
        'no_poll_create' => 'User don\'t create poll',
        'no_poll_participant' => 'User don\'t participate poll',
        'no_poll_close' => 'User don\'t close poll',
        'polls_of_user_fail' => 'Get polls of user fail',
        'not_found_user' => 'Not found User',
    ],
    'validation' => [
        'name' => [
            'required' => 'Please enter your name!',
            'max' => 'Name is maximum ' . config('settings.length_poll.name') . ' characters',
        ],
        'content' => [
            'max' => 'Content is maximum ' . config('settings.length_poll.content') . ' characters',
        ],
        'email' => [
            'required' => 'Please enter your email!',
            'max' => 'Email is maximum ' . config('settings.length_poll.email') . ' characters',
            'email' => 'Email invalid!'
        ],
        'title' => [
            'required' => 'Please enter poll title!',
            'max' => 'Title is maximum ' . config('settings.length_poll.title') . ' characters',
        ],
        'description' => [
            'max' => 'Ddescription is maximum ' . config('settings.length_poll.description') . 'characters',
        ],
        'type' => [
            'required' => 'Please choose type of poll',
            'boolean' => 'Type of poll invalid',
        ],
        'option' => [
            'option' => 'Please enter one option of poll',
        ],
        'setting' => [
            'setting' => 'Config setting invalid. Please check again!',
        ],
        'participant' => [
            'email' => 'Please enter one email of participant',
        ],
        'date_close' => [
            'format' => 'Date of close poll must be d-m-Y format',
        ],
        'member' => [
            'regex' => 'Email of participants are invalid',
        ],
    ],
    'table' => [
        'thead' => [
            'STT' => 'No.',
            'creator' => 'Creator info',
            'title' => 'Title',
            'status' => 'Status',
            'type' => 'Type',
            'link' => 'Link',
            'created_at' => 'Created at',
        ],
        'tbody' => [
            'name' => 'Name: ',
            'email' => 'Email: ',
            'link_participant' => 'Participant: ',
            'link_administration' => 'Administration: ',
        ],
    ],
    'tooltip' => [
        'edit' => 'Edit this poll',
        'duplicate' => 'Create duplicate',
        'delete_comment' => 'Delete all comment of this poll',
        'delete' => 'Delete this poll',
        'show' => 'View detail this poll',
        'open' => 'Open this poll',
        'close' => 'Close this poll',
    ],
    'nav_tab_edit' => [
        'info' => 'INFORMATION',
        'activity' => 'ACTIVITY',
        'option' => 'OPTION',
        'setting' => 'SETTING',
        'voting' => 'VOTING',
        'result' => 'RESULT',
        'administration' => 'ADMINISTRATION',
    ],
    'message_client' => [
        'required' => 'This field is required',
        'max' => 'Maximum number of characters is ',
        'email' => 'Email invalid!',
        'link_exists' => 'Link is exists in system. Please try again!',
        'link_valid' => 'Link valid, you can use this link',
        'number' => 'Value must is number!',
        'choose' => 'Please choose ',
        'option_empty' => 'You must add a new option',
        'option_required' => 'You must enter content of a option',
        'participant_empty' => 'You must add a email',
        'email_exist' => 'Email address does not exist. Please try again!',
        'time_close_poll' => 'Time close poll must be larger current time',
        'on' => 'ON',
        'off' => 'OFF',
        'email_exist_database' => '<i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Email exists in database, you should be login to create poll.',
        'confirm_delete_option' => 'Are you sure you want to delete this option. It\'s will remove all voting of this?',
        'send_email_success' => 'A new email have been sent mail box of you. Please check mail.',
        'send_email_fail' => 'Send email fail, please check email address.',
        'option_duplicate' => 'Option duplicate. Please enter another option',
        'option_minimum' => 'You can\'t delete this option because a poll must have minimum one option.',
        'option_image_duplicate' => 'Have two image same, are you sure use it',
        'number_edit' => 'Number limit must lager than total vote of poll. Number vote of poll is ',
        'image' => 'Image invalid, please check again!',
        'empty_link_image' => 'Enter a url or click upload',
        'not_type_url_image' => 'The image URL does not point to an image or the correct type of image.',
        'time_out_url_image' => 'The image URL was not reachable.  Check that the URL is correct.',
        'email_exists' => 'Email exist in system. Please enter a new email to vote',
        'error_occurs' => 'Error occurs while processing',
        'success_comment' => 'Comment was successful',
        'fail_comment' => 'Comment fail',
        'type_email_invalid' => 'Type of email was invalid',
    ],
    'mail' => [
        'label' => [
            'introduction' => 'INTRODUCTION',
        ],
        'introduction' => 'They will help your create a poll very fast and easily to you use it. Let\'s access into <a href="' . url("/") .'">' .url("/") . '</a>',
        'participant' => [
            'head' => 'POLL - VOTING',
            'link' => 'Link to vote:',
        ],
    ],

    'result_create' => [
        'head' => 'Fpoll',
        'thank' => 'Thank, ',
        'create_success' => 'Your poll has been created',
        'send_mail' => 'The following two links have been send to :email in one e-mail each.',
        'participant_link' => 'Participation link',
        'help_participant' => 'Send this link to anyone you wish to invite',
        'link_admin' => 'Administration link',
        'help_admin' => 'Access this link to change, close or delete this poll',
    ],

/*------------------------------------------------------------
*                  USER - POLL
*------------------------------------------------------------*/
    'poll' => 'Poll',
    'vote' => 'Vote',
    'vote_page' => 'Vote page',
    'close' => 'Close',
    'name' => 'Name',
    'email' => 'Email',
    'no' => 'No',
    'poll_history' => 'Poll History',
    'show_vote_details' => 'Show vote details',
    'poll_info' => 'Information',
    'activity_poll' => 'Activity',
    'show_result' => 'Result',
    'next' => 'Next',
    'optional' => 'optional',
    'one_answer' => 'One answer',
    'multiple_answer' => 'Multiple answers',

    'poll_details' => 'Poll Details',
    'poll_initiate' => 'Poll initiated by',
    'description' => 'Haven\'t description for this poll',
    'location' => 'Haven\'t location for this poll',
    'where' => 'Where: ',
    'comments' => 'Comments',
    'add_comment' => 'Add a comment',
    'show_comments' => 'Show comments',
    'hide' => 'Hide comments',
    'save_comment' => 'Save Comment',
    'view_history' => 'Views History',
    'delete_all_participants' => 'Delete all participants',
    'list_polls' => 'List Polls',
    'polls_initiated' => 'Polls initiated',
    'subject' => 'Subject',
    'participants' => 'Participants',
    'latest_activity' => 'Latest activity',
    'polls_participated_in' => 'Polls participated in',
    'polls_closed' => 'Polls closed',
    'list_all_polls' => 'List all Polls',
    'administer' => 'Administer',
    'close_poll' => 'Close this poll',
    'reopen_poll' => 'Reopen',
    'confirm_close_poll' => 'Are you want to close this poll?',
    'close_poll_successfully' => 'Poll closed successfully',
    'close_poll_fail' => 'Poll closed fail',
    'reopen_poll_fail' => 'Reopen poll fail',
    'reopen_poll_successfully' => 'Reopen poll sucessfully',
    'poll_not_found' => 'Poll not found',
    'message_name' => 'Please provide your name to vote',
    'message_email' => 'Please provide your email to vote',
    'message_validate_email' => 'Please provide a valid email',
    'voted_poll' => 'You voted this poll, if you want to edit vote bofore, you need to vote one more time',
    'message_poll_limit' => 'Sorry, you can not vote this poll, poll reached limit',
    'message_poll_closed' => 'Sorry, poll closed. You can not view and vote this poll',
    'message_poll_time_out' => 'Sorry, poll have been time up to vote. You can not vote this poll',
    'comment_name' => 'Please enter your name',
    'comment_content' => 'Please enter a comment',
    'confirmRemove' => 'Are you sure?',
    'load_latest_polls' => 'List latest polls only',
    'edit_link_admin' => 'Edit link Admin',
    'edit_link_user' => 'Edit link User',
    'participation_link' => 'Participation link',
    'administer_link' => 'Administer link',
    'administration' => 'Administration',
    'vote_empty' => 'Vote empty, You can vote this poll',
    'confirm_delete_vote' => 'Are you sure delete this vote',
    'email_exist' => 'Email exist, You need to login to vote or chose another email',
    'remove_vote_successfully' => 'You deleted vote successfully',
    'vote_successfully' => 'You voted this poll successfully',
    'export_pdf' => 'Export poll to PDF',
    'export_excel' => 'Export poll to Excel',
    'link_exist' => 'Link exist',
    'link_invalid' => 'Link invalid',
    'edit_link_successfully' => 'Edit successfully',
    'edit_link_admin_successfully' => 'Link manage this poll has been updated. You will be redirected to new link.',
    'delete_all_participants_successfully' => 'Delete all participants successfully',
    'incorrect_password' => 'Password incorrect',
    'enter_password' => 'Enter password to view this poll',
    'create_duplicate_poll' => 'Create duplicate poll',
    'not_activity' => 'Not activity',
    'confirm_delete_all_participant' => 'Are you sure delete all participant of this poll?',
    'login_here' => ' Login here',
    'option' => [
        'name_vote' => 'Name option',
        'rate_vote' => 'Rate vote',
        'count_vote' => 'Count vote',
    ],
    'hide_result_message' => 'Poll is setting hide result. You can\'t view result of this poll',
    'flashy_message' => 'Mail sent, Please check email',
    'message_exist_email' => 'Email not exist',
    'link_vote' => 'Link Vote',
    'link_admin' => 'Link Admin',
    'email_not_exist' => 'Email to create poll not exist',
    'register_with_mail_not_exist' => 'Register fail, Email register not exist',
    'link_not_found' => 'Sorry, Link not found',
    'date_last_vote' => 'Date laste vote',
    'number_vote' => 'Vote number',
    'email_voted' => 'This email voted, Please chose another email to vote',
    'check' => 'Check',
    'message_required_email' => 'Please enter email to vote this poll',
    'message_validate_name' => 'Please enter name to vote this poll',
    'message_validate_name_and_email' => 'Please enter name and email to vote this poll',
    'no_name' => 'No Name',
    'reach_limit' => 'Poll has enough people vote',
    'action' => 'View Administer page',
    'image_preview' => 'Image preview',
    'table_result' => 'TABLE RESULT',
    'bar_chart' => 'BAR CHART',
    'pie_chart' => 'PIE CHART',
    'statistic' => 'STATISTIC',
    'copy_link' => 'Copy link',
    'send_mail_again' => 'If you haven\'t receive email. Click me...',
    'total_vote' => 'Total vote',
    'vote_first_time' => 'Vote first time',
    'vote_last_time' => 'Vote last time',
    'option_highest_vote' => 'Option with highest vote',
    'option_lowest_vote' => 'Option with lowest vote',
    'message_vote_one_time' => 'You voted, This poll only vote one time',
    'confirm_reopen_poll' => 'Are you sure reopen this poll?',
    'close_date' => 'date close poll',
    'view_option' => 'View option',
    'view_setting' => 'View setting',
    'poll_voted' => 'This poll have been voted. You can\'t edit option of it',
    'link' => 'Link',
    'required_type_email' => 'Email must be have extension: :type',
];
