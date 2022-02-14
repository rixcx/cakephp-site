<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * News Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $slug
 * @property \Cake\I18n\FrozenDate $date
 * @property string $title
 * @property string $body
 * @property \Cake\I18n\FrozenTime|null $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Newscategory[] $newscategories
 */
class News extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'slug' => true,
        'date' => true,
        'title' => true,
        'body' => true,
        'created_at' => true,
        'updated_at' => true,
        'user' => true,
        'newscategories' => true,
    ];
    
    /**
     * Format date.
     *
     * @param object Cake\I18n\FrozenDate
     * @return \Cake\Http\Response|null|void
     */
    public function formatdate($date)
    {
      $formatdate = $date->i18nFormat('yyyy年MM月dd日 HH:mm:ss');
      return $formatdate;
    
    }
}
