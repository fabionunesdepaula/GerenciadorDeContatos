<?php

namespace app\models;

use Yii;
use yii\validators\Validator;

/**
 * This is the model class for table "contatos".
 *
 * @property int $id
 * @property string $nome
 * @property string $email
 * @property string $telefone
 * @property string|null $nota
 */
class Contatos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contatos';
    }
/**
 * @inheritdoc
 */
public function rules()
{
    return [
        [['nome', 'email', 'telefone'], 'required'],
        ['email', 'email'], // Validar o formato do email
        ['email', 'validateCustomEmail'], // Validar as condições personalizadas de email
        // Outras regras de validação, se necessário
    ];
}

/**
 * Validação personalizada para verificar se o email atende às condições especificadas.
 */
public function validateCustomEmail($attribute, $params)
{
    $email = $this->$attribute;

    // Verifique se o email atende às condições especificadas
    if (!preg_match('/^[a-zA-Z][a-zA-Z0-9_\.\-]*@[a-zA-Z]+\.[a-zA-Z]{2,3}(\.[a-zA-Z]{2})?$/', $email)) {
        $this->addError($attribute, 'O email não atende às condições especificadas.');
    }
}


    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'email' => 'Email',
            'telefone' => 'Telefone',
            'nota' => 'Nota',
        ];
    }
    // models/Contatos.php



}
