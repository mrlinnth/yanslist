@extends('layouts.app')

@section('content')
    <div class="uk-section uk-section-primary">
        <div class="uk-container">
            <h3>{{__('Browse Listings By')}}</h3>
            <form class="" uk-grid>
                <div class="uk-width-1-3@m uk-width-1-1@s">
                    <select class="uk-select">
                        <option value="">{{__('Select Region')}}</option>
                        <option>Option 01</option>
                        <option>Option 02</option>
                    </select>
                </div>
                <div class="uk-width-1-3@m uk-width-1-1@s">
                    <select class="uk-select">
                        <option value="">{{__('Select Township')}}</option>
                        <option>Option 01</option>
                        <option>Option 02</option>
                    </select>
                </div>
                <div class="uk-width-1-3@m uk-width-1-1@s">
                    <button type="submit" class="uk-button uk-button-primary">{{__('Search')}}</button>
                </div>
            </form>
        </div>
    </div>

    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid-large" uk-grid>
                @foreach($post_types as $key => $value)
                    <div class="uk-width-1-2@m uk-width-1-1@s">
                        <h2>{{__($value)}}</h2>
                        <ul class="uk-list uk-list-large">
                            <li><a class="uk-link-text" href="#">List item 1</a></li>
                            <li><a class="uk-link-text" href="">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit. Ab aliquid autem consequatur cum eaque enim</a></li>
                            <li><a class="uk-link-text" href="">List item 3</a></li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
