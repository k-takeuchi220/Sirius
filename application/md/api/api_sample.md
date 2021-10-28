## POST /sample1

固定のメッセージを返す  

Request  
| name | type | comment |
|:-----|:-----|:--------|
| - | - | - |

Response
| name | type | comment |
|:-----|:-----|:--------|
| msg | string | Hello worldが固定で入る |

## POST /sample2/{name}

設定したメッセージを返す  

Request  
| name | type | comment |
|:-----|:-----|:--------|
| msg | string | msg |

Response
| name | type | comment |
|:-----|:-----|:--------|
| msg | string | {name}さん、{msg} |

