<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DetailPemesananResource\Pages;
use App\Filament\Resources\DetailPemesananResource\RelationManagers;
use App\Models\DetailPemesanan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DetailPemesananResource extends Resource
{
    protected static ?string $model = DetailPemesanan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('pemesanan_id')
                ->relationship('pemesanan', 'id')
                ->required(),

                Forms\Components\Select::make('menu_id')
                ->relationship('menu', 'nama_menu')
                ->required(),

                Forms\Components\TextInput::make('jumlah')->numeric()->required(),
                Forms\Components\TextInput::make('subtotal')->numeric()->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('pemesanan.id')->label('ID Pesanan'),
                Tables\Columns\TextColumn::make('menu.nama_menu'),
                Tables\Columns\TextColumn::make('jumlah'),
                Tables\Columns\TextColumn::make('subtotal')
                ->formatStateUsing(fn ($state) => 'Rp ' . number_format($state, 0, ',', '.')),

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
            'index' => Pages\ListDetailPemesanans::route('/'),
            'create' => Pages\CreateDetailPemesanan::route('/create'),
            'edit' => Pages\EditDetailPemesanan::route('/{record}/edit'),
        ];
    }
}
