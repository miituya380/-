select 問題.問題no, count, count
  from
    問題,
    (
      select count()
    )
  where 問題集no = :questions