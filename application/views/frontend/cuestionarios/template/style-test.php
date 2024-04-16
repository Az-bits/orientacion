<style>
    .form_logo {
        left: 100px;
    }

    .form_logo a img {
        width: 220px;
        height: 120px;
    }

    .form_items .error+.error {
        height: 2rem;
        left: 22%;
    }

    @media only screen and (max-width: 768px) {
        .form_logo {
            left: 11px;
        }
    }

    .form_btn {
        padding-top: 2rem;
    }

    .multisteps_form_panel {
        transition: opacity 0.5s ease-in-out;
    }

    .az-time {
        display: none;
    }

    @media screen and (max-width: 1199.98px) {
        .az-time {
            display: flex;
            /* position: relative !important; */
            margin-left: .8rem;
        }

        .multisteps_form_panel {
            padding-top: 0rem;
        }

        .form_logo {
            margin-top: 0;
        }

        .prev_btn {
            font-size: 1rem;
        }

        .next_btn {
            font-size: 1rem;
        }

        .form_btn {
            padding-bottom: 1rem;
        }

        .form_items label {
            height: 12rem;
        }

        .form_items label:after {
            top: 11.7%;
            right: 5px;
        }

        input:checked+span.checked:after {
            top: 12.7%;
            right: 9px;
        }

        .form_items .error+.error {
            height: 2rem;
            left: 80%;
        }

        #nextBtn span {
            display: none;
        }

        #prevBtn span {
            display: none;
        }

        .question_title {
            padding-top: 0 !important;
            padding-bottom: 1rem !important;
        }

        .count_box {
            width: 20em;
            height: 2em;
            /* top: 18.4em;
            left: 20px; */
        }

        .count_clock img {
            width: 1.8125rem;
        }

        .count_number {
            height: 0;
        }

        .count_number .text-uppercase {
            display: none;
        }

        .form_items .error+.error {
            top: -62px;
            left: 109%;
        }
    }
</style>