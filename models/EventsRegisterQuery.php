<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[EventsRegister]].
 *
 * @see EventsRegister
 */
class EventsRegisterQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return EventsRegister[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return EventsRegister|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
