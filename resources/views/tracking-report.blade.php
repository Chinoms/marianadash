<html>

<head>
    <title>Tracking Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <style>
        .activity-feed {
            padding: 15px;
            list-style: none;
        }

        .activity-feed .feed-item {
            position: relative;
            padding-bottom: 20px;
            padding-left: 30px;
            border-left: 2px solid #e4e8eb;
        }

        .activity-feed .feed-item:last-child {
            border-color: transparent;
        }

        .activity-feed .feed-item::after {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            left: -7px;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #177dff;
        }

        .feed-item-black::after {
            background: #1a2035 !important;
        }

        .feed-item-primary::after {
            background: #1572E8 !important;
        }

        .feed-item-secondary::after {
            background: #6861CE !important;
        }

        .feed-item-success::after {
            background: #31CE36 !important;
        }

        .feed-item-danger::after {
            background: #F25961 !important;
        }

        .feed-item-info::after {
            background: #48ABF7 !important;
        }

        .feed-item-warning::after {
            background: #FFAD46 !important;
        }

        .activity-feed .feed-item .date {
            display: block;
            position: relative;
            top: -5px;
            color: #8c96a3;
            text-transform: uppercase;
            font-size: 13px;
        }

        .activity-feed .feed-item .text {
            position: relative;
            top: -3px;
        }
    </style>

</head>
<div style="width: 100%; height: 200px; background: #F00000;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #DC281E, #F00000);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #DC281E, #F00000); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">

</div>
<div class="col-md-10 offset-md-1 rounded" style="margin-top: -100px;  background-color: white">
    <div class="panel-header bg-primary-gradient" id="top-header">

    </div>


    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h4>Parcel Information</h4>
                <hr>
                <strong>Tracking Code</strong>
                <br>
                {{ $parcelInfo->tracking_code }}
                <br>
                <strong>Delivery Type</strong>
                <br>
                {{ ucwords($parcelInfo->delivery_type) }}
                <br>
                <strong>Parcel Description</strong>
                <br>
                {{ $parcelInfo->parcel_description }}
            </div>
            <div class="col-sm">
                <h4>Parcel Origin</h4>
                <hr>
                <strong>Sender Name</strong>
                <br>
                {{ $parcelInfo->sender_name }}
                <br>
                <strong>Sender Address</strong>
                <br>
                {{ ucwords($parcelInfo->sender_address) }}
                <br>
                <strong>Sender Phone</strong>
                <br>
                {{ $parcelInfo->sender_phone }}
            </div>
            <div class="col-sm">
                <h4>Parcel Destination</h4>
                <hr>
                <strong>Recipient Name</strong>
                <br>
                {{ $parcelInfo->recipient_name }}
                <br>
                <strong>Recipient Address</strong>
                <br>
                {{ ucwords($parcelInfo->recipient_address) }}
                <br>
                <strong>Recipient Phone</strong>
                <br>
                {{ $parcelInfo->recipient_phone }}
            </div>
        </div>
        <ol class="activity-feed">
            <li class="feed-item feed-item-secondary">
                <time class="date" datetime="9-25">Sep 25</time>
                <span class="text">Responded to need <a href="#">"Volunteer opportunity"</a></span>
            </li>
            <li class="feed-item feed-item-success">
                <time class="date" datetime="9-24">Sep 24</time>
                <span class="text">Added an interest <a href="#">"Volunteer Activities"</a></span>
            </li>
            <li class="feed-item feed-item-info">
                <time class="date" datetime="9-23">Sep 23</time>
                <span class="text">Joined the group <a href="single-group.php">"Boardsmanship Forum"</a></span>
            </li>
            <li class="feed-item feed-item-warning">
                <time class="date" datetime="9-21">Sep 21</time>
                <span class="text">Responded to need <a href="#">"In-Kind Opportunity"</a></span>
            </li>
            <li class="feed-item feed-item-danger">
                <time class="date" datetime="9-18">Sep 18</time>
                <span class="text">Created need <a href="#">"Volunteer Opportunity"</a></span>
            </li>
            <li class="feed-item">
                <time class="date" datetime="9-17">Sep 17</time>
                <span class="text">Attending the event <a href="single-event.php">"Some New Event"</a></span>
            </li>
        </ol>
    </div>
</div>