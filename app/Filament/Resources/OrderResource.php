<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Order;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('code')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('customer_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('customer_phone')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('origin_branch')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('destination_branch')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('cashier')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('courier_pickup')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('courier_delivery')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('vehicle_pickup')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('vehicle_delivery')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('status')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('items')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tracking_histories')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('code')
                    ->searchable(),
                Tables\Columns\TextColumn::make('customer_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('customer_phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('origin_branch')
                    ->searchable(),
                Tables\Columns\TextColumn::make('destination_branch')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cashier')
                    ->searchable(),
                Tables\Columns\TextColumn::make('courier_pickup')
                    ->searchable(),
                Tables\Columns\TextColumn::make('courier_delivery')
                    ->searchable(),
                Tables\Columns\TextColumn::make('vehicle_pickup')
                    ->searchable(),
                Tables\Columns\TextColumn::make('vehicle_delivery')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('items')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tracking_histories')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
