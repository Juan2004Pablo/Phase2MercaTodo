<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('product_id') }}
            {{ Form::text('product_id', $product->product_id, ['class' => 'form-control' . ($errors->has('product_id') ? ' is-invalid' : ''), 'placeholder' => 'Product Id']) }}
            {!! $errors->first('product_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('name_product') }}
            {{ Form::text('name_product', $product->name_product, ['class' => 'form-control' . ($errors->has('name_product') ? ' is-invalid' : ''), 'placeholder' => 'Name Product']) }}
            {!! $errors->first('name_product', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('price') }}
            {{ Form::text('price', $product->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Price']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('product_image') }}
            {{ Form::text('product_image', $product->product_image, ['class' => 'form-control' . ($errors->has('product_image') ? ' is-invalid' : ''), 'placeholder' => 'Product Image']) }}
            {!! $errors->first('product_image', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>