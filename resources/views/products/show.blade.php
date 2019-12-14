@extends('layouts.template')

    <div class="panel panel-default">
        <div class="panel-heading"><h1>Products</h1></div>
        <div class="panel-body">
            <div class="row">
                @foreach ($response as $product)
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                               
                                <div class="caption">
                                    <h3>{{ $product->title }}</h3>
                                    
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>

        </div>