<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%events_register}}".
 *
 * @property int $register_id
 * @property int|null $register_parent_id
 * @property string $name
 * @property string|null $name2
 * @property string|null $name3
 * @property int|null $register_option
 * @property string $address
 * @property string $zipcode
 * @property string|null $email
 * @property string $phone
 * @property string $register_date
 * @property string $payment_id
 * @property string|null $payment_type C=credit, T=transfer
 * @property float|null $payment_price
 * @property int $payment_status 0=NotPay,1=Wait,2=Complete,3=Fail,4=Cancel
 * @property string $payment_res
 * @property string $payment_date
 * @property int $register_enable
 * @property int $event_id
 * @property int $register_slip
 * @property string $extra
 * @property string|null $utm
 * @property string|null $business_type
 * @property string|null $company_website
 */
class EventsRegister extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%events_register}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['register_parent_id', 'register_option', 'payment_status', 'register_enable', 'event_id', 'register_slip'], 'integer'],
            [['name', 'address', 'zipcode', 'phone', 'register_date', 'payment_id', 'payment_res', 'payment_date', 'extra'], 'required'],
            [['name', 'name2', 'address', 'payment_res', 'extra', 'utm', 'company_website'], 'string'],
            [['register_date', 'payment_date'], 'safe'],
            [['payment_price'], 'number'],
            [['name3', 'zipcode', 'email', 'phone'], 'string', 'max' => 100],
            [['payment_id'], 'string', 'max' => 50],
            [['payment_type'], 'string', 'max' => 1],
            [['business_type'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'register_id' => 'Register ID',
            'register_parent_id' => 'Register Parent ID',
            'name' => 'Name',
            'name2' => 'Name2',
            'name3' => 'Name3',
            'register_option' => 'Register Option',
            'address' => 'Address',
            'zipcode' => 'Zipcode',
            'email' => 'Email',
            'phone' => 'Phone',
            'register_date' => 'Register Date',
            'payment_id' => 'Payment ID',
            'payment_type' => 'Payment Type',
            'payment_price' => 'Payment Price',
            'payment_status' => 'Payment Status',
            'payment_res' => 'Payment Res',
            'payment_date' => 'Payment Date',
            'register_enable' => 'Register Enable',
            'event_id' => 'Event ID',
            'register_slip' => 'Register Slip',
            'extra' => 'Extra',
            'utm' => 'Utm',
            'business_type' => 'Business Type',
            'company_website' => 'Company Website',
        ];
    }

    /**
     * {@inheritdoc}
     * @return EventsRegisterQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EventsRegisterQuery(get_called_class());
    }
}
