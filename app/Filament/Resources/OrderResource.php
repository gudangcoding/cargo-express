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
                Forms\Components\Select::make('service_type')
                    ->options(Order::getServiceTypeOptions())
                    ->required()
                    ->default('cargo')
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $set) {
                        if ($state === 'parcel') {
                            $set('shipping_method', null);
                        }
                    }),
                Forms\Components\Select::make('shipping_method')
                    ->options(Order::getShippingMethodOptions())
                    ->visible(fn (callable $get) => $get('service_type') === 'cargo')
                    ->required(fn (callable $get) => $get('service_type') === 'cargo'),
                Forms\Components\TextInput::make('weight_kg')
                    ->numeric()
                    ->step(0.01)
                    ->visible(fn (callable $get) => $get('service_type') === 'parcel')
                    ->required(fn (callable $get) => $get('service_type') === 'parcel')
                    ->suffix('kg'),
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
                Tables\Columns\TextColumn::make('service_type')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'cargo' => 'success',
                        'parcel' => 'info',
                    }),
                Tables\Columns\TextColumn::make('shipping_method')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'laut' => 'blue',
                        'udara' => 'green',
                        'darat' => 'orange',
                    })
                    ->visible(fn ($record) => $record->service_type === 'cargo'),
                Tables\Columns\TextColumn::make('weight_kg')
                    ->numeric(
                        decimalPlaces: 2,
                        decimalSeparator: '.',
                        thousandsSeparator: ',',
                    )
                    ->suffix(' kg')
                    ->visible(fn ($record) => $record->service_type === 'parcel'),
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
                Tables\Filters\SelectFilter::make('service_type')
                    ->options(Order::getServiceTypeOptions()),
                Tables\Filters\SelectFilter::make('shipping_method')
                    ->options(Order::getShippingMethodOptions())
                    ->visible(fn () => true),
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
