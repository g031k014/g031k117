<?php
    echo $this->Html->tag('h1', 'フレームワーク導入のメリットとデメリット');

    $list = array(
        'メリット' => array(
            '工数の削減，開発リスクの回避，品質の向上が期待できる',
            '保守やアプリケーション統合が容易になる',
            'セキュリティ要件への対応を済ませているものもある',
            'ノウハウを次の開発，保守に流用できる',
            '最先端の技術トレンドや高度な技術要件に素早く対応できる'
        ),
        'デメリット' => array(
            '学習コストがかかる'
        )
    );
    echo $this->Html->nestedList($list);
    echo $this->Html->tag('br');


    echo $this->Html->tag('h1', 'PHPフレームワーク');

    $list = array(
        'CodeIgniter' => array(
            '豊富なボキャブラリーが用意されている',
            '上記のライブラリにアクセスするためのシンプルなインタフェースと論理的な構造が用意されている',
            '学習コストの低さ',
            'XSSフィルタリングが備わっている',
            'Eメール送信クラスがある',
            'MVCパターンに基づいている'
        ),
        'Zend Framework' => array(
            'クロスプラットフォーム',
            '従う開発パラダイムや開発パターンは存在しない',
            '様々なデザインパターンのためのコンポーネントを提供している',
            '全てのコンポーネントは完全オブジェクト指向のPHP5である',
            '他のフレームワークほど規約を使っていない',
        ),
        'Slim(マイクロフレームワーク)' => array(
            'ソースコードが見やすいため，後々拡張しやすい',
            '普通のフレームワークと比べ学習コストが低い',
            'テンプレートエンジンは不要'
        )
    );
    echo $this->Html->nestedList($list);
    echo $this->Html->tag('br');


    echo $this->Html->tag('h1', 'Ruby on Railsの特徴');

    $list = array(
        '基本理念' => array(
            "繰り返さない(DRY: Don't Repeat Yourself)",
            '設定より規約(CoC: Convention over Configuration)',
            '上記の基本理念に従うことでプログラマは冗長な作業を行う必要がなくなる'
        ),
        'MVCモデル' => array(
            'Model' => array(
                'データベースの情報を操作する仕組み',
                '通常プログラマはActiveRecord::Baseのサブクラスを作る必要がある',
                'ファイル名は単語区切りをアンダースコアにし，すべて小文字(スネークケース)'
            ),
            'View' => array(
                '表示のためのロジック',
                'コントローラクラスからのデータをどのように表すかを規定している'
            ),
            'Controller' => array(
                'モデルからデータを受け取り，ビューにレンダリングを行わせる仕組み',
                '複数のアクションが記述されている',
                'ファイル名はModelと同じくスネークケース'
            )
        )
    );
    echo $this->Html->nestedList($list);