<?php

use Illuminate\Database\Seeder;
use App\Models\Entities\ItemCategory;
use Carbon\Carbon;

class ItemCategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $categories = [
            new ItemCategory(['id' => 1, 'name' => '医薬品・指定医薬部外品', 'position' => 0]),
            new ItemCategory(['id' => 2, 'name' => '医療雑貨', 'position' => 1]),
            new ItemCategory(['id' => 3, 'name' => '健康食品', 'position' => 2]),
            new ItemCategory(['id' => 4, 'name' => '化粧品', 'position' => 3]),
            new ItemCategory(['id' => 5, 'name' => '日用品', 'position' => 4]),
            new ItemCategory(['id' => 6, 'name' => '食品・飲料(ケース販売)', 'position' => 6]),
            new ItemCategory(['id' => 7, 'name' => '食品', 'position' => 5]),
            new ItemCategory(['id' => 11, 'name' => '栄養ドリンク', 'parent_id' => 1, 'position' => 6]),
            new ItemCategory(['id' => 12, 'name' => 'ビタミン剤', 'parent_id' => 1, 'position' => 5]),
            new ItemCategory(['id' => 13, 'name' => '漢方薬・生薬', 'parent_id' => 1, 'position' => 22]),
            new ItemCategory(['id' => 14, 'name' => '目薬', 'parent_id' => 1, 'position' => 10]),
            new ItemCategory(['id' => 15, 'name' => '胃腸薬', 'parent_id' => 1, 'position' => 23]),
            new ItemCategory(['id' => 16, 'name' => '整腸剤', 'parent_id' => 1, 'position' => 21]),
            new ItemCategory(['id' => 17, 'name' => '便秘薬・浣腸', 'parent_id' => 1, 'position' => 20]),
            new ItemCategory(['id' => 18, 'name' => '下痢止め', 'parent_id' => 1, 'position' => 19]),
            new ItemCategory(['id' => 19, 'name' => '肩こり・腰痛・筋肉痛', 'parent_id' => 1, 'position' => 18]),
            new ItemCategory(['id' => 20, 'name' => '風邪薬', 'parent_id' => 1, 'position' => 2]),
            new ItemCategory(['id' => 21, 'name' => 'せき・たん', 'parent_id' => 1, 'position' => 3]),
            new ItemCategory(['id' => 22, 'name' => 'のど・口中・はみがき', 'parent_id' => 1, 'position' => 17]),
            new ItemCategory(['id' => 24, 'name' => 'こどものくすり', 'parent_id' => 1, 'position' => 16]),
            new ItemCategory(['id' => 25, 'name' => '痛み止め・解熱', 'parent_id' => 1, 'position' => 7]),
            new ItemCategory(['id' => 26, 'name' => '睡眠改善薬', 'parent_id' => 1, 'position' => 15]),
            new ItemCategory(['id' => 27, 'name' => '乗物酔い止め', 'parent_id' => 1, 'position' => 14]),
            new ItemCategory(['id' => 28, 'name' => '眠気防止', 'parent_id' => 1, 'position' => 13]),
            new ItemCategory(['id' => 29, 'name' => '皮膚薬', 'parent_id' => 1, 'position' => 12]),
            new ItemCategory(['id' => 30, 'name' => '水虫', 'parent_id' => 1, 'position' => 11]),
            new ItemCategory(['id' => 31, 'name' => '殺虫剤・虫よけ', 'parent_id' => 1, 'position' => 25]),
            new ItemCategory(['id' => 32, 'name' => 'キズ薬・キズ口消毒', 'parent_id' => 1, 'position' => 9]),
            new ItemCategory(['id' => 33, 'name' => '手指消毒・器具消毒', 'parent_id' => 1, 'position' => 1]),
            new ItemCategory(['id' => 34, 'name' => '育毛・養毛剤', 'parent_id' => 1, 'position' => 8]),
            new ItemCategory(['id' => 35, 'name' => '検査薬', 'parent_id' => 1, 'position' => 24]),
            new ItemCategory(['id' => 36, 'name' => 'その他の医薬品', 'parent_id' => 1, 'position' => 26]),
            new ItemCategory(['id' => 37, 'name' => 'くしゃみ・鼻水・鼻づまり', 'parent_id' => 1, 'position' => 4]),
            new ItemCategory(['id' => 38, 'name' => '第一類医薬品', 'parent_id' => 1, 'position' => 0, 'class_one' => 1]),
            new ItemCategory(['id' => 51, 'name' => '測定器', 'parent_id' => 2, 'position' => 21]),
            new ItemCategory(['id' => 52, 'name' => '衛生用品', 'parent_id' => 2, 'position' => 20]),
            new ItemCategory(['id' => 53, 'name' => 'マスク', 'parent_id' => 2, 'position' => 1]),
            new ItemCategory(['id' => 54, 'name' => 'はみがき', 'parent_id' => 2, 'position' => 2]),
            new ItemCategory(['id' => 55, 'name' => '包帯・テープ・ガーゼ', 'parent_id' => 2, 'position' => 19]),
            new ItemCategory(['id' => 56, 'name' => 'サポーター・テーピング', 'parent_id' => 2, 'position' => 18]),
            new ItemCategory(['id' => 57, 'name' => '綿棒・ばんそうこう', 'parent_id' => 2, 'position' => 17]),
            new ItemCategory(['id' => 58, 'name' => '介護おむつ・尿とりパット', 'parent_id' => 2, 'position' => 9]),
            new ItemCategory(['id' => 59, 'name' => '避妊用品・潤滑剤', 'parent_id' => 2, 'position' => 16]),
            new ItemCategory(['id' => 60, 'name' => '温熱用品', 'parent_id' => 2, 'position' => 15]),
            new ItemCategory(['id' => 61, 'name' => '冷却用品', 'parent_id' => 2, 'position' => 14]),
            new ItemCategory(['id' => 62, 'name' => '磁気・お灸', 'parent_id' => 2, 'position' => 13]),
            new ItemCategory(['id' => 63, 'name' => 'コンタクト用品', 'parent_id' => 2, 'position' => 8]),
            new ItemCategory(['id' => 64, 'name' => '介護雑貨', 'parent_id' => 2, 'position' => 11]),
            new ItemCategory(['id' => 65, 'name' => '洗口液・液体ハミガキ', 'parent_id' => 2, 'position' => 4]),
            new ItemCategory(['id' => 66, 'name' => 'デンタル用品', 'parent_id' => 2, 'position' => 5]),
            new ItemCategory(['id' => 67, 'name' => '入れ歯用品', 'parent_id' => 2, 'position' => 6]),
            new ItemCategory(['id' => 68, 'name' => '安眠・いびき対策', 'parent_id' => 2, 'position' => 12]),
            new ItemCategory(['id' => 69, 'name' => '軽失禁', 'parent_id' => 2, 'position' => 10]),
            new ItemCategory(['id' => 70, 'name' => 'その他の医療雑貨', 'parent_id' => 2, 'position' => 22]),
            new ItemCategory(['id' => 81, 'name' => 'ビタミン', 'parent_id' => 3, 'position' => 1]),
            new ItemCategory(['id' => 82, 'name' => 'ミネラル', 'parent_id' => 3, 'position' => 16]),
            new ItemCategory(['id' => 83, 'name' => 'アミノ酸', 'parent_id' => 3, 'position' => 8]),
            new ItemCategory(['id' => 84, 'name' => '必須脂肪酸・健康油', 'parent_id' => 3, 'position' => 6]),
            new ItemCategory(['id' => 85, 'name' => 'コンドロイチン・グルコサミン', 'parent_id' => 3, 'position' => 7]),
            new ItemCategory(['id' => 86, 'name' => 'プロバイオティクス', 'parent_id' => 3, 'position' => 4]),
            new ItemCategory(['id' => 87, 'name' => 'ウコン・植物由来', 'parent_id' => 3, 'position' => 15]),
            new ItemCategory(['id' => 88, 'name' => '滋養', 'parent_id' => 3, 'position' => 14]),
            new ItemCategory(['id' => 89, 'name' => '酵素', 'parent_id' => 3, 'position' => 13]),
            new ItemCategory(['id' => 90, 'name' => 'お酢', 'parent_id' => 3, 'position' => 12]),
            new ItemCategory(['id' => 91, 'name' => '栄養調整食品', 'parent_id' => 3, 'position' => 11]),
            new ItemCategory(['id' => 92, 'name' => 'ダイエット食品', 'parent_id' => 3, 'position' => 10]),
            new ItemCategory(['id' => 93, 'name' => '美容', 'parent_id' => 3, 'position' => 9]),
            new ItemCategory(['id' => 94, 'name' => '健康茶', 'parent_id' => 3, 'position' => 5]),
            new ItemCategory(['id' => 95, 'name' => '青汁', 'parent_id' => 3, 'position' => 2]),
            new ItemCategory(['id' => 96, 'name' => 'プロテイン', 'parent_id' => 3, 'position' => 3]),
            new ItemCategory(['id' => 97, 'name' => 'その他の健康食品', 'parent_id' => 3, 'position' => 17]),
            new ItemCategory(['id' => 101, 'name' => '化粧水', 'parent_id' => 4, 'position' => 7]),
            new ItemCategory(['id' => 102, 'name' => '乳液', 'parent_id' => 4, 'position' => 8]),
            new ItemCategory(['id' => 103, 'name' => '美容液', 'parent_id' => 4, 'position' => 9]),
            new ItemCategory(['id' => 104, 'name' => 'クリーム', 'parent_id' => 4, 'position' => 13]),
            new ItemCategory(['id' => 105, 'name' => '洗顔料', 'parent_id' => 4, 'position' => 12]),
            new ItemCategory(['id' => 106, 'name' => 'クレンジング', 'parent_id' => 4, 'position' => 15]),
            new ItemCategory(['id' => 107, 'name' => 'パック・マスク', 'parent_id' => 4, 'position' => 11]),
            new ItemCategory(['id' => 108, 'name' => '日焼け止め', 'parent_id' => 4, 'position' => 0]),
            new ItemCategory(['id' => 109, 'name' => '男性化粧品', 'parent_id' => 4, 'position' => 38]),
            new ItemCategory(['id' => 110, 'name' => 'リップクリーム', 'parent_id' => 4, 'position' => 16]),
            new ItemCategory(['id' => 111, 'name' => 'ハンドクリーム', 'parent_id' => 4, 'position' => 14]),
            new ItemCategory(['id' => 112, 'name' => 'ボディクリーム・ミルク', 'parent_id' => 4, 'position' => 10]),
            new ItemCategory(['id' => 113, 'name' => 'ヘアスタイリング', 'parent_id' => 4, 'position' => 4]),
            new ItemCategory(['id' => 114, 'name' => 'ヘアカラー', 'parent_id' => 4, 'position' => 37]),
            new ItemCategory(['id' => 115, 'name' => 'シャンプー・トリートメント', 'parent_id' => 4, 'position' => 2]),
            new ItemCategory(['id' => 116, 'name' => 'ボディソープ', 'parent_id' => 4, 'position' => 5]),
            new ItemCategory(['id' => 117, 'name' => '石鹸・ハンドソープ', 'parent_id' => 4, 'position' => 6]),
            new ItemCategory(['id' => 118, 'name' => '入浴剤', 'parent_id' => 4, 'position' => 36]),
            new ItemCategory(['id' => 119, 'name' => 'バス用品', 'parent_id' => 4, 'position' => 35]),
            new ItemCategory(['id' => 120, 'name' => 'フットケア', 'parent_id' => 4, 'position' => 34]),
            new ItemCategory(['id' => 121, 'name' => '化粧下地', 'parent_id' => 4, 'position' => 19]),
            new ItemCategory(['id' => 122, 'name' => 'BB・CCクリーム', 'parent_id' => 4, 'position' => 18]),
            new ItemCategory(['id' => 123, 'name' => 'ファンデーション', 'parent_id' => 4, 'position' => 17]),
            new ItemCategory(['id' => 124, 'name' => 'フェイスパウダー', 'parent_id' => 4, 'position' => 20]),
            new ItemCategory(['id' => 125, 'name' => 'コンシーラー・ハイライト', 'parent_id' => 4, 'position' => 21]),
            new ItemCategory(['id' => 126, 'name' => '口紅', 'parent_id' => 4, 'position' => 22]),
            new ItemCategory(['id' => 127, 'name' => 'チーク', 'parent_id' => 4, 'position' => 25]),
            new ItemCategory(['id' => 128, 'name' => 'アイメイク', 'parent_id' => 4, 'position' => 23]),
            new ItemCategory(['id' => 129, 'name' => 'メイク道具', 'parent_id' => 4, 'position' => 26]),
            new ItemCategory(['id' => 130, 'name' => 'ヘアアクセサリー・小物', 'parent_id' => 4, 'position' => 31]),
            new ItemCategory(['id' => 131, 'name' => 'デオドラント・制汗', 'parent_id' => 4, 'position' => 1]),
            new ItemCategory(['id' => 132, 'name' => '脱毛・除毛', 'parent_id' => 4, 'position' => 33]),
            new ItemCategory(['id' => 133, 'name' => 'フレグランス・香水', 'parent_id' => 4, 'position' => 32]),
            new ItemCategory(['id' => 134, 'name' => 'ネイル', 'parent_id' => 4, 'position' => 24]),
            new ItemCategory(['id' => 136, 'name' => 'その他の化粧品', 'parent_id' => 4, 'position' => 39]),
            new ItemCategory(['id' => 137, 'name' => 'ヘアケア(アウトバス)', 'parent_id' => 4, 'position' => 3]),
            new ItemCategory(['id' => 138, 'name' => '女性用育毛剤', 'parent_id' => 4, 'position' => 28]),
            new ItemCategory(['id' => 139, 'name' => '男性カミソリ', 'parent_id' => 4, 'position' => 29]),
            new ItemCategory(['id' => 140, 'name' => '女性カミソリ', 'parent_id' => 4, 'position' => 30]),
            new ItemCategory(['id' => 141, 'name' => '男性育毛剤', 'parent_id' => 4, 'position' => 27]),
            new ItemCategory(['id' => 150, 'name' => 'ベビー用品・おむつ', 'parent_id' => 5, 'position' => 39]),
            new ItemCategory(['id' => 151, 'name' => 'ベビーフード', 'parent_id' => 5, 'position' => 38]),
            new ItemCategory(['id' => 152, 'name' => 'ベビー用品', 'parent_id' => 5, 'position' => 37]),
            new ItemCategory(['id' => 153, 'name' => 'ペットフード', 'parent_id' => 5, 'position' => 36]),
            new ItemCategory(['id' => 154, 'name' => 'ペット用品', 'parent_id' => 5, 'position' => 35]),
            new ItemCategory(['id' => 155, 'name' => 'トイレットペーパー', 'parent_id' => 5, 'position' => 34]),
            new ItemCategory(['id' => 156, 'name' => 'ティッシュペーパー', 'parent_id' => 5, 'position' => 33]),
            new ItemCategory(['id' => 157, 'name' => 'キッチンペーパー', 'parent_id' => 5, 'position' => 32]),
            new ItemCategory(['id' => 158, 'name' => 'ウェットティッシュ', 'parent_id' => 5, 'position' => 31]),
            new ItemCategory(['id' => 159, 'name' => '生理用品', 'parent_id' => 5, 'position' => 30]),
            new ItemCategory(['id' => 160, 'name' => '台所・食器洗剤', 'parent_id' => 5, 'position' => 29]),
            new ItemCategory(['id' => 161, 'name' => '住宅洗剤', 'parent_id' => 5, 'position' => 28]),
            new ItemCategory(['id' => 162, 'name' => 'トイレ洗剤', 'parent_id' => 5, 'position' => 27]),
            new ItemCategory(['id' => 163, 'name' => '芳香剤・消臭剤', 'parent_id' => 5, 'position' => 26]),
            new ItemCategory(['id' => 164, 'name' => '防虫・除湿財', 'parent_id' => 5, 'position' => 25]),
            new ItemCategory(['id' => 165, 'name' => '衣料洗剤', 'parent_id' => 5, 'position' => 24]),
            new ItemCategory(['id' => 166, 'name' => '柔軟剤・漂白剤', 'parent_id' => 5, 'position' => 23]),
            new ItemCategory(['id' => 167, 'name' => 'キッチン用品', 'parent_id' => 5, 'position' => 22]),
            new ItemCategory(['id' => 168, 'name' => 'ラップ・ホイル', 'parent_id' => 5, 'position' => 20]),
            new ItemCategory(['id' => 169, 'name' => '卓上用品', 'parent_id' => 5, 'position' => 21]),
            new ItemCategory(['id' => 170, 'name' => '調理器具', 'parent_id' => 5, 'position' => 19]),
            new ItemCategory(['id' => 171, 'name' => '行楽用品', 'parent_id' => 5, 'position' => 18]),
            new ItemCategory(['id' => 172, 'name' => '清掃用品', 'parent_id' => 5, 'position' => 17]),
            new ItemCategory(['id' => 173, 'name' => '洗濯用品', 'parent_id' => 5, 'position' => 16]),
            new ItemCategory(['id' => 174, 'name' => '風呂用品', 'parent_id' => 5, 'position' => 15]),
            new ItemCategory(['id' => 175, 'name' => 'トイレ用品', 'parent_id' => 5, 'position' => 14]),
            new ItemCategory(['id' => 176, 'name' => '収納', 'parent_id' => 5, 'position' => 13]),
            new ItemCategory(['id' => 177, 'name' => '電材', 'parent_id' => 5, 'position' => 12]),
            new ItemCategory(['id' => 178, 'name' => 'DIY・園芸用品', 'parent_id' => 5, 'position' => 11]),
            new ItemCategory(['id' => 179, 'name' => '文具', 'parent_id' => 5, 'position' => 10]),
            new ItemCategory(['id' => 180, 'name' => 'ごみ袋', 'parent_id' => 5, 'position' => 9]),
            new ItemCategory(['id' => 181, 'name' => '靴下', 'parent_id' => 5, 'position' => 8]),
            new ItemCategory(['id' => 182, 'name' => 'スリッパ', 'parent_id' => 5, 'position' => 7]),
            new ItemCategory(['id' => 183, 'name' => '肌着', 'parent_id' => 5, 'position' => 6]),
            new ItemCategory(['id' => 184, 'name' => '部屋着', 'parent_id' => 5, 'position' => 5]),
            new ItemCategory(['id' => 185, 'name' => 'パンスト', 'parent_id' => 5, 'position' => 4]),
            new ItemCategory(['id' => 186, 'name' => 'エプロン', 'parent_id' => 5, 'position' => 3]),
            new ItemCategory(['id' => 187, 'name' => 'その他の日用品', 'parent_id' => 5, 'position' => 40]),
            new ItemCategory(['id' => 757, 'name' => 'コンタクトレンズ', 'parent_id' => 2, 'position' => 7]),
            new ItemCategory(['id' => 758, 'name' => '資生堂', 'parent_id' => 4, 'position' => 40]),
            new ItemCategory(['id' => 759, 'name' => 'コーセー', 'parent_id' => 4, 'position' => 41]),
            new ItemCategory(['id' => 760, 'name' => 'カネボウ', 'parent_id' => 4, 'position' => 43]),
            new ItemCategory(['id' => 761, 'name' => 'ソフィーナ', 'parent_id' => 4, 'position' => 42]),
            new ItemCategory(['id' => 762, 'name' => '動物用医薬品', 'position' => 7]),
            new ItemCategory(['id' => 763, 'name' => 'カイロ', 'parent_id' => 5, 'position' => 2]),
            new ItemCategory(['id' => 764, 'name' => 'ちふれ', 'parent_id' => 4, 'position' => 44]),
            new ItemCategory(['id' => 765, 'name' => 'はぶらし', 'parent_id' => 2, 'position' => 3]),
            new ItemCategory(['id' => 766, 'name' => 'タオル', 'parent_id' => 5, 'position' => 1]),
            new ItemCategory(['id' => 767, 'name' => 'エリクシールシュペリエル', 'parent_id' => 758, 'position' => 2]),
            new ItemCategory(['id' => 768, 'name' => 'スキンクリエーター', 'parent_id' => 758, 'position' => 0]),
            new ItemCategory(['id' => 769, 'name' => 'HAKU', 'parent_id' => 758, 'position' => 6]),
            new ItemCategory(['id' => 770, 'name' => 'エリクシールホワイト', 'parent_id' => 758, 'position' => 3]),
            new ItemCategory(['id' => 771, 'name' => 'マキアージュ', 'parent_id' => 758, 'position' => 8]),
            new ItemCategory(['id' => 772, 'name' => 'インテグレート', 'parent_id' => 758, 'position' => 12]),
            new ItemCategory(['id' => 773, 'name' => 'インテグレートグレイシィ', 'parent_id' => 758, 'position' => 11]),
            new ItemCategory(['id' => 774, 'name' => 'プリオール', 'parent_id' => 758, 'position' => 10]),
            new ItemCategory(['id' => 775, 'name' => 'スノービューティ', 'parent_id' => 758, 'position' => 1]),
            new ItemCategory(['id' => 776, 'name' => 'アンテリージェ', 'parent_id' => 759, 'position' => 0]),
            new ItemCategory(['id' => 777, 'name' => 'エスプリーク', 'parent_id' => 759, 'position' => 2]),
            new ItemCategory(['id' => 778, 'name' => 'ワンバイコーセー', 'parent_id' => 759, 'position' => 1]),
            new ItemCategory(['id' => 779, 'name' => '雪肌精', 'parent_id' => 759, 'position' => 3]),
            new ItemCategory(['id' => 780, 'name' => 'その他', 'parent_id' => 759, 'position' => 8]),
            new ItemCategory(['id' => 781, 'name' => 'エリクシールルフレ', 'parent_id' => 758, 'position' => 5]),
            new ItemCategory(['id' => 782, 'name' => 'アネッサ', 'parent_id' => 758, 'position' => 9]),
            new ItemCategory(['id' => 783, 'name' => 'リバイタル', 'parent_id' => 758, 'position' => 7]),
            new ItemCategory(['id' => 784, 'name' => 'フォルミュール', 'parent_id' => 759, 'position' => 7]),
            new ItemCategory(['id' => 785, 'name' => 'その他', 'parent_id' => 758, 'position' => 13]),
            new ItemCategory(['id' => 786, 'name' => 'ルシェリ', 'parent_id' => 759, 'position' => 4]),
            new ItemCategory(['id' => 787, 'name' => 'カルテクリニティ', 'parent_id' => 759, 'position' => 5]),
            new ItemCategory(['id' => 789, 'name' => '殺虫剤・虫よけ', 'parent_id' => 5, 'position' => 0]),
            new ItemCategory(['id' => 790, 'name' => 'IP', 'parent_id' => 761, 'position' => 1]),
            new ItemCategory(['id' => 791, 'name' => 'ボーテ', 'parent_id' => 761, 'position' => 4]),
            new ItemCategory(['id' => 792, 'name' => 'プリマヴィスタ', 'parent_id' => 761, 'position' => 0]),
            new ItemCategory(['id' => 793, 'name' => 'バイタルリッチ', 'parent_id' => 761, 'position' => 2]),
            new ItemCategory(['id' => 794, 'name' => 'ライズ', 'parent_id' => 761, 'position' => 5]),
            new ItemCategory(['id' => 795, 'name' => 'グレイス', 'parent_id' => 761, 'position' => 3]),
            new ItemCategory(['id' => 796, 'name' => 'その他', 'parent_id' => 761, 'position' => 6]),
            new ItemCategory(['id' => 797, 'name' => 'シリーズサプリメント', 'parent_id' => 3, 'position' => 0]),
            new ItemCategory(['id' => 798, 'name' => 'Dプログラム', 'parent_id' => 758, 'position' => 4]),
            new ItemCategory(['id' => 801, 'name' => 'その他男性化粧品', 'parent_id' => 109, 'position' => 14]),
            new ItemCategory(['id' => 802, 'name' => 'シェービング用品', 'parent_id' => 109, 'position' => 13]),
            new ItemCategory(['id' => 803, 'name' => 'ボディケア', 'parent_id' => 109, 'position' => 12]),
            new ItemCategory(['id' => 804, 'name' => 'その他スキンケア', 'parent_id' => 109, 'position' => 11]),
            new ItemCategory(['id' => 805, 'name' => 'フェイスシート', 'parent_id' => 109, 'position' => 9]),
            new ItemCategory(['id' => 806, 'name' => 'クリーム・マスク', 'parent_id' => 109, 'position' => 8]),
            new ItemCategory(['id' => 807, 'name' => '化粧水・乳液', 'parent_id' => 109, 'position' => 7]),
            new ItemCategory(['id' => 808, 'name' => '洗顔', 'parent_id' => 109, 'position' => 6]),
            new ItemCategory(['id' => 809, 'name' => 'その他ヘアケア', 'parent_id' => 109, 'position' => 5]),
            new ItemCategory(['id' => 810, 'name' => 'ヘアスプレー・ミスト・フォーム', 'parent_id' => 109, 'position' => 4]),
            new ItemCategory(['id' => 811, 'name' => 'ポマード・グリース', 'parent_id' => 109, 'position' => 3]),
            new ItemCategory(['id' => 812, 'name' => 'ヘアクリーム・ワックス', 'parent_id' => 109, 'position' => 2]),
            new ItemCategory(['id' => 813, 'name' => 'ヘアリキッド', 'parent_id' => 109, 'position' => 1]),
            new ItemCategory(['id' => 814, 'name' => 'ヘアトニック', 'parent_id' => 109, 'position' => 0]),
            new ItemCategory(['id' => 815, 'name' => '制汗・フレグランス', 'parent_id' => 109, 'position' => 10]),
            new ItemCategory(['id' => 816, 'name' => 'コフレドール', 'parent_id' => 760, 'position' => 0]),
            new ItemCategory(['id' => 817, 'name' => 'その他カネボウ', 'parent_id' => 760, 'position' => 8]),
            new ItemCategory(['id' => 818, 'name' => 'エビータ', 'parent_id' => 760, 'position' => 7]),
            new ItemCategory(['id' => 819, 'name' => 'アリー', 'parent_id' => 760, 'position' => 6]),
            new ItemCategory(['id' => 820, 'name' => 'メディア', 'parent_id' => 760, 'position' => 5]),
            new ItemCategory(['id' => 821, 'name' => 'ケイト', 'parent_id' => 760, 'position' => 4]),
            new ItemCategory(['id' => 822, 'name' => 'フリープラス', 'parent_id' => 760, 'position' => 3]),
            new ItemCategory(['id' => 823, 'name' => 'スイサイ', 'parent_id' => 760, 'position' => 2]),
            new ItemCategory(['id' => 824, 'name' => 'ブランシール', 'parent_id' => 760, 'position' => 1]),
            new ItemCategory(['id' => 825, 'name' => '除菌・抗菌', 'parent_id' => 2, 'position' => 0]),
            new ItemCategory(['id' => 826, 'name' => 'ファシオ', 'parent_id' => 759, 'position' => 6])
            //new ItemCategory(['id' => 827, 'name' => '特売商品', 'position' => 0])
        ];

        foreach ($categories as $category) {
            $category->save();
        }
    }
}
